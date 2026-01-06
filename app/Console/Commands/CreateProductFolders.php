<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\MainProduct;

class CreateProductFolders extends Command
{
    protected $signature = 'products:create-folders';

    protected $description = 'Create product folder structure automatically';

    public function handle()
    {
        $basePath = public_path('uploads/products');

        // Ensure base products folder exists
        if (!File::exists($basePath)) {
            File::makeDirectory($basePath, 0755, true);
        }

        $mainProducts = MainProduct::with('subCategories.subSubCategories')->get();

        $foldersCreated = 0;
        $createdFolders = []; // store created folder names

        foreach ($mainProducts as $main) {
            $mainPath = $basePath . '/' . $main->slug;
            if ($this->createFolder($mainPath)) {
                $foldersCreated++;
                $createdFolders[] = 'uploads/products/' . $main->slug;
            }

            foreach ($main->subCategories as $sub) {
                $subPath = $mainPath . '/' . $sub->slug;
                if ($this->createFolder($subPath)) {
                    $foldersCreated++;
                    $createdFolders[] = 'uploads/products/' . $main->slug . '/' . $sub->slug;
                }

                foreach ($sub->subSubCategories as $subSub) {
                    $subSubPath = $subPath . '/' . $subSub->slug;
                    if ($this->createFolder($subSubPath)) {
                        $foldersCreated++;
                        $createdFolders[] =
                            'uploads/products/' . $main->slug . '/' . $sub->slug . '/' . $subSub->slug;
                    }
                }
            }
        }

        // Final output
        if ($foldersCreated > 0) {
            $this->info("✅ Product folders created successfully!");
            $this->info("Total folders created: $foldersCreated");

            $this->line('');
            $this->info('📂 Created folders:');

            foreach ($createdFolders as $folder) {
                $this->line(' - ' . $folder);
            }
        } else {
            $this->info("⚠️ All product folders already exist. No new folder created.");
        }
    }

    private function createFolder($path)
    {
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
            return true;
        }
        return false;
    }
}
