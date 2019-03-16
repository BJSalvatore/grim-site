<?php

namespace App\Providers;

  include __DIR__ . '/vendor/autoload.php';

use Illuminate\Support\ServiceProvider;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;
use Storage;

class AwsS3ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $client = new S3Client([
        'credentials' => [
            'key'    => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY')
        ],
        'region' => env('AWS_DEFAULT_REGION'),
        'version' => 'latest|version',
      ]);

      $adapter = new AwsS3Adapter($client, 'grim-images');
      $filesystem = new Filesystem($adapter);
    }
}
