<?php

namespace App\Services;

use App\Repositories\Photo\PhotoRepository;
use Intervention\Image\Facades\Image;
use Storage;

class PhotoService
{
    protected $storage;
    protected $photoRepository;
    protected $baseUrl;

    public function __construct(PhotoRepository $photoRepository)
    {
        $this->photoRepository = $photoRepository;
        $this->storage = Storage::disk('DO');
        $this->baseUrl = 'https://' . getenv('AWS_BUCKET') . '.nyc3.digitaloceanspaces.com';
    }

    /**
     * Get all photos from the repo
     */
    public function all()
    {
        return $this->photoRepository->top100();
    }

    /**
     * Upload a file and its associated meta data
     *
     * @param $file
     * @param $data
     */
    public function upload($file, $data)
    {
        // Store the photo to disk
        $imageFileName = time() . '.' . $file->getClientOriginalExtension();
        $filePath = '/photos/' . $imageFileName;
        $content = file_get_contents($file);

        $image = Image::make($file)->fit(800 , 600);


        $this->storage->put($filePath, $image->stream()->__toString() , 'public');

        // Write metadata to db
        $data['url'] = $this->baseUrl . $filePath;
        $data['rank'] = $this->photoRepository->getHighestRank() + 1;
        unset($data['photo']);
        $this->photoRepository->create($data);
    }

    /**
     * Delete a photo from disk and remove its metadata
     *
     * @param $id
     */
    public function delete($id)
    {
        $photo = $this->photoRepository->find($id);
        $filepath = explode($this->baseUrl ,$photo->url)[1];
        $this->storage->delete($filepath);
        $this->photoRepository->decrementHigherRank($photo->rank);
        return $this->photoRepository->delete($id);

    }

    /**
     * Move a photo up into a more prominent position
     *
     * This actually requires a reduction in its ranking
     */
    public function moveUp($id)
    {
        $photo = $this->photoRepository->find($id);
        return $this->photoRepository->decrement($id);
    }

    /**
     * Move a photo down into a less prominent position
     *
     * This actually requires an increase in its ranking
     */
    public function moveDown($id)
    {
        $photo = $this->photoRepository->find($id);
        return $this->photoRepository->increment($id);
    }



}