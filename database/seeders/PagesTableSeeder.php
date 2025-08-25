<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Permission;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'visi-misi',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Visi Misi',
                'excerpt' => 'Visi Misi',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'visi misi',
                'meta_keywords' => 'visi, misi',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'struktur-organisasi',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Struktur Organisasi',
                'excerpt' => 'Struktur Organisasi',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'struktur organisasi',
                'meta_keywords' => 'struktur, organisasi',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'sekretariat',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Sekretariat',
                'excerpt' => 'Sekretariat',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'sekretariat',
                'meta_keywords' => 'sekretariat',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'info-casn',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Info CASN',
                'excerpt' => 'Info CASN',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'info casn',
                'meta_keywords' => 'info, casn',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'tugas-belajar',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Tugas Belajar',
                'excerpt' => 'Tugas Belajar',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'tugas belajar',
                'meta_keywords' => 'tugas, belajar',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'diklat',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Diklat',
                'excerpt' => 'Diklat',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'diklat',
                'meta_keywords' => 'diklat',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'kewajiban-asn',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Kewajiban ASN',
                'excerpt' => 'Kewajiban ASN',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'kewajiban asn',
                'meta_keywords' => 'kewajiban, asn',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'larangan-asn',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Larangan ASN',
                'excerpt' => 'Larangan ASN',
                'image' => 'NULL',
                'meta_description' => 'larangan asn',
                'meta_keywords' => 'larangan, asn',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'jabatan-fungsional',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Jabatan Fungsional',
                'excerpt' => 'Jabatan Fungsional',
                'body' => '',
                'image' => 'NULL',
                'meta_description' => 'jabatan fungsional',
                'meta_keywords' => 'jabatan, fungsional',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'pelaksana',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Pelaksana',
                'excerpt' => 'Pelaksana',
                'image' => 'NULL',
                'meta_description' => 'pelaksana',
                'meta_keywords' => 'pelaksana',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'kenaikan-pangkat',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Kenaikan Pangkat',
                'excerpt' => 'Kenaikan Pangkat',
                'image' => 'NULL',
                'meta_description' => 'kenaikan pangkat',
                'meta_keywords' => 'kenaikan, pangkat',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'bup',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'BUP',
                'excerpt' => 'BUP',
                'image' => 'NULL',
                'meta_description' => 'bup',
                'meta_keywords' => 'bup',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'aps',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'APS',
                'excerpt' => 'APS',
                'image' => 'NULL',
                'meta_description' => 'aps',
                'meta_keywords' => 'aps',
                'status' => 'ACTIVE',
            ])->save();
        }

        //Permissions
        Permission::generateFor('pages');
        //Content
        $page = Page::firstOrNew([
            'slug' => 'janda-duda',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title' => 'Janda/Duda',
                'excerpt' => 'Janda/Duda',
                'image' => 'NULL',
                'meta_description' => 'janda duda',
                'meta_keywords' => 'janda, duda',
                'status' => 'ACTIVE',
            ])->save();
        }

    }
}

