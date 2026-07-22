<!--begin::Card widget 16-->
@php
    $cardClass = $cardClass ?? 'card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10';
    $cardStyle = $cardStyle ?? 'background-color: #080655';
    $amount = $amount ?? '69';
    $amountClass = $amountClass ?? 'fs-2hx fw-bold text-white me-2 lh-1 ls-n2';
    $showBadge = $showBadge ?? false;
    $badgeClass = $badgeClass ?? 'badge badge-light-success fs-base';
    $badgeIconClass = $badgeIconClass ?? 'ki-duotone ki-arrow-up fs-5 text-success ms-n1';
    $badgeValue = $badgeValue ?? '2.2%';
    $subtitle = $subtitle ?? 'Active Projects';
    $subtitleOpacityClass = $subtitleOpacityClass ?? 'opacity-50';
    $subtitleClass = $subtitleClass ?? "text-white {$subtitleOpacityClass} pt-1 fw-semibold fs-6";
    $statsOpacityClass = $statsOpacityClass ?? 'opacity-50';
    $statsRowClass = $statsRowClass ?? "d-flex justify-content-between fw-bold fs-6 text-white {$statsOpacityClass} w-100 mt-auto mb-2";
    $pendingTextClass = $pendingTextClass ?? '';
    $percentageTextClass = $percentageTextClass ?? '';
    $pendingText = $pendingText ?? '43 Pending';
    $percentageText = $percentageText ?? '72%';
    $progressTrackClass = $progressTrackClass ?? 'h-8px mx-3 w-100 bg-light-danger rounded';
    $progressBarClass = $progressBarClass ?? 'bg-danger rounded h-8px';
    $progressWidth = $progressWidth ?? '72%';
@endphp
<div class="{{ $cardClass }}" @if (!empty($cardStyle)) style="{{ $cardStyle }}" @endif>
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <div class="card-title d-flex flex-column">
            <!--begin::Amount-->
            <div class="d-flex align-items-center">
                <span class="{{ $amountClass }}">{{ $amount }}</span>
                @if ($showBadge)
                    <span class="{{ $badgeClass }}">
                        <i class="{{ $badgeIconClass }}">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>{{ $badgeValue }}
                    </span>
                @endif
            </div>
            <!--end::Amount-->
            <!--begin::Subtitle-->
            <span class="{{ $subtitleClass }}">{{ $subtitle }}</span>
            <!--end::Subtitle-->
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->
    <!--begin::Card body-->
    <div class="card-body d-flex align-items-end pt-0">
        <!--begin::Progress-->
        <div class="d-flex align-items-center flex-column mt-3 w-100">
            <div class="{{ $statsRowClass }}">
                <span class="{{ $pendingTextClass }}">{{ $pendingText }}</span>
                <span class="{{ $percentageTextClass }}">{{ $percentageText }}</span>
            </div>
            <div class="{{ $progressTrackClass }}">
                <div class="{{ $progressBarClass }}" role="progressbar" style="width: {{ $progressWidth }};" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <!--end::Progress-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card widget 16-->
