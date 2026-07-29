<?php

namespace Database\Seeders;

use App\Models\PageContent\CallToAction;
use App\Models\PageContent\SlideBanner;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Default Slide Banners
        if (SlideBanner::count() === 0) {
            SlideBanner::create([
                'title_prefix' => 'Selamat Datang di',
                'title_prefix_en' => 'Welcome to',
                'title_highlight' => 'Universitas Kami',
                'title_highlight_en' => 'Our University',
                'description' => 'Menciptakan generasi unggul melalui pendidikan berstandar internasional dan fasilitas modern.',
                'description_en' => 'Empowering future leaders through world-class education and modern facilities.',
                'image_url' => 'assets/img-temp/1920x1080/img5.jpg',
                'button_text' => 'Jelajahi Beranda',
                'button_text_en' => 'Explore Homepage',
                'button_url' => '#content',
                'order' => 1,
                'is_active' => true,
            ]);

            SlideBanner::create([
                'title_prefix' => 'Mencapai Masa Depan Gemilang dengan',
                'title_prefix_en' => 'Achieve Brilliant Future with',
                'title_highlight' => 'Program Studi Terbaik',
                'title_highlight_en' => 'Excellence Academic Programs',
                'description' => 'Pilihan fakultas dan program studi lengkap yang dirancang sesuai kebutuhan dunia industri global.',
                'description_en' => 'Comprehensive degree programs tailored for modern industry and global career demands.',
                'image_url' => 'assets/img-temp/1920x1080/img6.jpg',
                'button_text' => 'Lihat Program Studi',
                'button_text_en' => 'View Academic Programs',
                'button_url' => 'website/programs',
                'order' => 2,
                'is_active' => true,
            ]);

            SlideBanner::create([
                'title_prefix' => 'Inovasi Riset &',
                'title_prefix_en' => 'Innovative Research &',
                'title_highlight' => 'Pengabdian Masyarakat',
                'title_highlight_en' => 'Community Service',
                'description' => 'Mengembangkan ilmu pengetahuan, riset sains, serta teknologi ramah lingkungan secara berkelanjutan.',
                'description_en' => 'Developing cutting-edge scientific research and sustainable technology solutions.',
                'image_url' => 'assets/img-temp/1920x1080/img7.jpg',
                'button_text' => 'Informasi Pendaftaran',
                'button_text_en' => 'Admissions Info',
                'button_url' => 'website/apply-for-all-intake',
                'order' => 3,
                'is_active' => true,
            ]);
        }

        // 2. Seed Default Pre-Footer Call to Action (CTA)
        if (CallToAction::count() === 0) {
            CallToAction::create([
                'title' => 'Bergabunglah dengan Universitas Kami',
                'title_en' => 'Join Our University',
                'description' => 'Mulai perjalanan akademik Anda bersama kami dan raih masa depan gemilang dengan program pendidikan berkualitas.',
                'description_en' => 'Start your academic journey with us and achieve a brilliant future with quality education programs.',
                'primary_button_text' => 'Daftar Sekarang',
                'primary_button_text_en' => 'Apply Now',
                'primary_button_url' => 'website/apply-for-all-intake',
                'secondary_button_text' => 'Hubungi Kami',
                'secondary_button_text_en' => 'Contact Us',
                'secondary_button_url' => 'website/contacts',
                'is_active' => true,
            ]);
        }
    }
}
