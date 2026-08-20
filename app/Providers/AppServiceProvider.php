<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\User;
use App\Models\User\UserDetail;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Menu;
use App\Models\AppSupport\AppProfil;
use App\Models\AppSupport\AppFitur;
use App\Models\AppSupport\ReferensiKategori;
use App\Models\AppSupport\ReferensiItem;
use App\Models\AppSupport\DataLogin;
use App\Models\AppSupport\Changelog;
use App\Models\AppSupport\BackupDb;
use App\Models\ManajemenPengguna\RejectedRegistration;
use App\Models\ManajemenPengguna\PasswordResetRequest;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        require_once(app_path('utils/helper.php'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'users'                    => User::class,
            'user_details'             => UserDetail::class,
            'roles'                    => Role::class,
            'permissions'              => Permission::class,
            'menus'                    => Menu::class,
            'app_profils'              => AppProfil::class,
            'app_fiturs'               => AppFitur::class,
            'referensi_kategoris'      => ReferensiKategori::class,
            'referensi_items'          => ReferensiItem::class,
            'data_logins'              => DataLogin::class,
            'changelogs'               => Changelog::class,
            'backup_dbs'               => BackupDb::class,
            'rejected_registrations'   => RejectedRegistration::class,
            'password_reset_requests'  => PasswordResetRequest::class,
        ]);
    }
}
