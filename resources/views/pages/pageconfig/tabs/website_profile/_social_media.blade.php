<div class="card card-flush shadow-xs border border-gray-200">
    <div class="card-header align-items-center py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900 fs-4">{{ app()->getLocale() == 'en' ? 'Social Media Links & Visibility Toggles' : 'Pengaturan Tautan & Sakelar Sosial Media Website' }}</span>
            <span class="text-muted mt-1 fw-semibold fs-7">{{ app()->getLocale() == 'en' ? 'Configure official social media URLs and toggle visibility switches per platform' : 'Atur tautan akun resmi dan sakelar visibilitas (tampil/sembunyi) per platform sosial media di footer' }}</span>
        </h3>
    </div>

    <div class="card-body pt-0">
        <form action="{{ route('pageconfig.website-profile.update') }}" method="POST">
            @csrf
            <input type="hidden" name="name" value="{{ $profile->name }}">
            <input type="hidden" name="name_en" value="{{ $profile->name_en }}">
            <input type="hidden" name="established_year" value="{{ $profile->established_year }}">
            <input type="hidden" name="address" value="{{ $profile->address }}">
            <input type="hidden" name="address_en" value="{{ $profile->address_en }}">

            @php
                $socialLinks = $profile->social_links ?? \App\Models\PageConfig\WebsiteProfile::getDefaultSocialLinks();
                $platforms = [
                    'twitter' => ['name' => 'Twitter / X', 'icon' => 'fab fa-twitter', 'color' => 'btn-light-twitter text-info', 'placeholder' => 'https://twitter.com/unify'],
                    'facebook' => ['name' => 'Facebook', 'icon' => 'fab fa-facebook-f', 'color' => 'btn-light-facebook text-primary', 'placeholder' => 'https://facebook.com/unify'],
                    'instagram' => ['name' => 'Instagram', 'icon' => 'fab fa-instagram', 'color' => 'btn-light-instagram text-danger', 'placeholder' => 'https://instagram.com/unify'],
                    'youtube' => ['name' => 'YouTube', 'icon' => 'fab fa-youtube', 'color' => 'btn-light-youtube text-danger', 'placeholder' => 'https://youtube.com/c/unify'],
                    'linkedin' => ['name' => 'LinkedIn', 'icon' => 'fab fa-linkedin-in', 'color' => 'btn-light-linkedin text-primary', 'placeholder' => 'https://linkedin.com/school/unify'],
                ];
            @endphp

            <div class="d-flex flex-column gap-6 mb-8">
                @foreach($platforms as $key => $meta)
                    @php
                        $itemData = $socialLinks[$key] ?? ['url' => '', 'is_active' => true];
                        $urlVal = is_array($itemData) ? ($itemData['url'] ?? '') : '';
                        $isActive = is_array($itemData) ? (!empty($itemData['is_active'])) : true;
                    @endphp

                    <div class="card bg-light-body border border-gray-300 p-5 rounded">
                        <div class="row align-items-center g-4">
                            <!-- Platform Brand Logo Badge & Name -->
                            <div class="col-md-3">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="btn btn-icon btn-circle {{ $meta['color'] }} shadow-xs p-3">
                                        <i class="{{ $meta['icon'] }} fs-2"></i>
                                    </span>
                                    <div class="d-flex flex-column">
                                        <span class="text-gray-900 fw-bold fs-6">{{ $meta['name'] }}</span>
                                        <code class="text-muted fs-8">{{ $key }}</code>
                                    </div>
                                </div>
                            </div>

                            <!-- Target URL Input -->
                            <div class="col-md-6">
                                <label class="fs-7 fw-semibold text-gray-700 mb-1 d-block">{{ app()->getLocale() == 'en' ? 'Target Account URL' : 'Tautan URL Akun Resmi' }}</label>
                                <div class="input-group input-group-solid">
                                    <span class="input-group-text"><i class="{{ $meta['icon'] }} text-gray-500 fs-6"></i></span>
                                    <input type="url" class="form-control form-control-solid fs-7" name="social_links[{{ $key }}][url]" value="{{ old("social_links.{$key}.url", $urlVal) }}" placeholder="{{ $meta['placeholder'] }}" />
                                </div>
                            </div>

                            <!-- Visibility Switch Toggle -->
                            <div class="col-md-3 text-md-end">
                                <label class="fs-7 fw-semibold text-gray-700 mb-1 d-block">{{ app()->getLocale() == 'en' ? 'Visibility Status' : 'Status Visibilitas' }}</label>
                                <div class="form-check form-switch form-check-custom form-check-solid justify-content-md-end justify-content-start">
                                    <input class="form-check-input h-25px w-45px me-2 js-social-toggle" type="checkbox" data-key="{{ $key }}" name="social_links[{{ $key }}][is_active]" value="1" {{ $isActive ? 'checked' : '' }} />
                                    <span class="fw-bold fs-7 js-social-toggle-label-{{ $key }} {{ $isActive ? 'text-success' : 'text-gray-500' }}">
                                        {{ $isActive ? (app()->getLocale() == 'en' ? 'Active' : 'Aktif') : (app()->getLocale() == 'en' ? 'Disabled' : 'Nonaktif') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-end pt-5">
                <button type="submit" class="btn btn-primary min-w-150px">
                    <i class="ki-duotone ki-check fs-2 me-1"></i>
                    {{ app()->getLocale() == 'en' ? 'Save Social Media Settings' : 'Simpan Pengaturan Sosial Media' }}
                </button>
            </div>
        </form>
    </div>
</div>
