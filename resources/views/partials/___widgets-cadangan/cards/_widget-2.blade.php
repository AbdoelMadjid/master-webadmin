<!--begin::Card widget 2-->
@php
    $cardClass = $cardClass ?? 'card h-lg-100';
    $iconType = $iconType ?? 'duotone';
    $iconClass = $iconClass ?? 'ki-duotone ki-compass fs-2hx text-gray-600';
    $iconImage = $iconImage ?? null;
    $iconPathCount = $iconPathCount ?? 2;
    $amount = $amount ?? '327';
    $label = $label ?? 'Projects';
    $badgeClass = $badgeClass ?? 'badge badge-light-success fs-base';
    $badgeIconClass = $badgeIconClass ?? 'ki-duotone ki-arrow-up fs-5 text-success ms-n1';
    $badgeValue = $badgeValue ?? '2.1%';
@endphp
<div class="{{ $cardClass }}">
    <!--begin::Body-->
    <div class="card-body d-flex justify-content-between align-items-start flex-column">
        <!--begin::Icon-->
        <div class="m-0">
            @if ($iconType === 'image' && $iconImage)
                <img src="{{ URL::asset($iconImage) }}" class="w-35px" alt="" />
            @else
                <i class="{{ $iconClass }}">
                    @for ($i = 1; $i <= $iconPathCount; $i++)
                        <span class="path{{ $i }}"></span>
                    @endfor
                </i>
            @endif
        </div>
        <!--end::Icon-->
        <!--begin::Section-->
        <div class="d-flex flex-column my-7">
            <!--begin::Number-->
            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $amount }}</span>
            <!--end::Number-->
            <!--begin::Follower-->
            <div class="m-0">
                <span class="fw-semibold fs-6 text-gray-500">{{ $label }}</span>
            </div>
            <!--end::Follower-->
        </div>
        <!--end::Section-->
        <!--begin::Badge-->
        <span class="{{ $badgeClass }}">
            <i class="{{ $badgeIconClass }}">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>{{ $badgeValue }}</span>
        <!--end::Badge-->
    </div>
    <!--end::Body-->
</div>
<!--end::Card widget 2-->
