<?php

namespace Database\Seeders;

use App\Models\SeoRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seoData = [
            [
                'page_name' => 'dashboard',
                'meta_title' => 'Admin Dashboard | Manage & Monitor',
                'meta_description' => 'Access the admin dashboard to manage content, monitor performance, and streamline your workflow in one place.',
                'meta_keywords' => 'dashboard, admin panel, content management, analytics, performance monitoring',
            ],
            [
                'page_name' => 'post',
                'meta_title' => 'Blog Posts | Latest Articles & Updates',
                'meta_description' => 'Explore the latest blog posts, articles, and news updates. Stay informed with fresh content and insights.',
                'meta_keywords' => 'blog, posts, articles, updates, news, content',
            ],
            [
                'page_name' => 'documents',
                'meta_title' => 'Documents | Browse & Manage Files',
                'meta_description' => 'Organize, browse, and manage all your documents efficiently. Secure file storage and easy access in one place.',
                'meta_keywords' => 'documents, files, file management, storage, browse documents',
            ],
        ];

        foreach ($seoData as $seo) {
            SeoRecord::updateOrCreate(
                ['page_name' => $seo['page_name']],
                $seo
            );
        }
    }
}
