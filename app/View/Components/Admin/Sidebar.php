<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $menus;

    public function __construct()
    {
        $this->menus = [
            [
                'name' => 'Dashboard',
                'href' => '/admin/dashboard',
                'icon' => 'ph ph-house',
                'sub_menu' => null,
            ],
            [
                'name' => 'Penduduk',
                'icon' => 'ph ph-users-four',
                'sub_menu' => [
                    [
                        'name' => 'Penduduk',
                        'href' => '/admin/penduduk',
                        'icon' => 'ph ph-users-four',
                    ],
                    [
                        'name' => 'Domisili',
                        'href' => '/admin/domisili',
                        'icon' => 'ph ph-address-book',
                    ],
                ],
            ],
            [
                'name' => 'Keluarga',
                'icon' => 'ph ph-users-three',
                'sub_menu' => [
                    [
                        'name' => 'Kartu Keluarga',
                        'href' => '/admin/kartu-keluarga',
                        'icon' => 'ph ph-identification-card',
                    ],
                    [
                        'name' => 'Anggota Keluarga',
                        'href' => '/admin/anggota-keluarga',
                        'icon' => 'ph ph-user-plus',
                    ],
                    [
                        'name' => 'Status Keluarga',
                        'href' => '/admin/status-keluarga',
                        'icon' => 'ph ph-dna',
                    ]
                ],
            ],
            [
                'name' => 'Perangkat Desa',
                'icon' => 'ph ph-user-list',
                'sub_menu' => [
                    [
                        'name' => 'Perangkat Desa',
                        'href' => '/admin/perangkat-desa',
                        'icon' => 'ph ph-user-list',
                    ],
                    [
                        'name' => 'Jabatan',
                        'href' => '/admin/jabatan',
                        'icon' => 'ph ph-briefcase',
                    ],
                    [
                        'name' => 'Rukun Tangga (RT)',
                        'href' => '/admin/rt',
                        'icon' => 'ph ph-user-plus',
                    ],
                    [
                        'name' => 'Rukun Warga (RW)',
                        'href' => '/admin/rw',
                        'icon' => 'ph ph-user-plus',
                    ],
                ],
            ],
            [
                'name' => 'Pekerjaan',
                'href' => '/admin/pekerjaan',
                'icon' => 'ph ph-briefcase',
                'sub_menu' => null,
            ],
            [
                'name' => 'Pendidikan',
                'href' => '/admin/pendidikan',
                'icon' => 'ph ph-graduation-cap',
                'sub_menu' => null,
            ],
            [
                'name' => 'Bantuan Sosial',
                'href' => '/admin/bantuan-sosial',
                'icon' => 'ph ph-hand-heart',
                'sub_menu' => null,
            ],
            [
                'name' => 'User',
                'href' => '/admin/users',
                'icon' => 'ph ph-user',
                'sub_menu' => null,
            ],
        ];        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.sidebar');
    }
}
