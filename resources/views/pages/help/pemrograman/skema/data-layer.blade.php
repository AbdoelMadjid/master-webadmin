@extends('layouts.index')

@section('styles')
    @include('pages.help.pemrograman._schema-ui')
@endsection

@section('toolbar')
    @component('layouts.partials._toolbar')
        @slot('li_1')
            Help
        @endslot
        @slot('li_2')
            {{ __('help.skema_pemrograman') }}
        @endslot
        @slot('li_3')
            {{ __('help.skema_data_layer') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <!--begin::Hero-->
                <div class="schema-hero mb-6">
                    <span class="schema-pill">
                        <i class="ki-duotone ki-database text-white fs-7 me-1"><span class="path1"></span><span class="path2"></span></i>
                        Data Layer Architecture
                    </span>
                    <h2 class="fw-bold">{{ __('help.pages.skema.data-layer.hero_title') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.data-layer.hero_lead') }}
                    </p>
                    <div class="schema-meta mt-3">
                        <span class="schema-chip"><i class="ki-duotone ki-cube-3 fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.data-layer.chip_1') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-file-up fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.data-layer.chip_2') }}</span>
                        <span class="schema-chip"><i class="ki-duotone ki-flash-circle fs-8 me-1"><span class="path1"></span><span class="path2"></span></i> {{ __('help.pages.skema.data-layer.chip_3') }}</span>
                    </div>
                </div>
                <!--end::Hero-->

                @if(app()->getLocale() == 'en')
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. CORE COMPONENTS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_20') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. END-TO-END DATA LIFECYCLE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ELOQUENT MODEL STRUCTURE & RELATIONSHIPS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>app/Models/
├─ User.php
├─ Order.php
├─ OrderItem.php
├─ Product.php
└─ ...

// {{ __('help.pages.skema.data-layer.code_1') }}
- User hasMany Order
- Order belongsTo User
- Order hasMany OrderItem
- OrderItem belongsTo Order
- OrderItem belongsTo Product</code></pre>
                            <ul class="schema-list mt-4 fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_23') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_4') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. MIGRATION STANDARDS & INDEXING STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file-up fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_4') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_29') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. MIGRATION SCHEMA & INDEX COMPOSITION EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>Schema::create('orders', function (Blueprint $table) {
  $table->id();
  $table->foreignId('user_id')->constrained()->cascadeOnDelete();
  $table->string('code')->unique();
  $table->decimal('total', 14, 2)->default(0);
  $table->timestamp('paid_at')->nullable();
  $table->timestamps();

  // Compound Index for optimized query filtering
  $table->index(['user_id', 'paid_at']);
});</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.data-layer.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. SEEDER & FACTORY GRAPH STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-graph-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code mt-4"><code>// Factory Relationship Graph Example:
User::factory()
  ->count(20)
  ->has(Order::factory()->count(3))
  ->create();</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. OPTIMIZED QUERY PATTERNS & N+1 PREVENTION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-flash-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_30') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_10') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. SAFE QUERY EXAMPLE (SELECTIVE SELECT + EAGER LOADING + PAGINATION) -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_8') }}
                            </h4>
                            <pre class="schema-code"><code>$orders = Order::query()
  ->select(['id', 'user_id', 'code', 'total', 'paid_at', 'created_at'])
  ->with(['user:id,name,email'])
  ->when($request->filled('status'), function ($q) use ($request) {
      $q->where('status', $request->string('status'));
  })
  ->when($request->filled('q'), function ($q) use ($request) {
      $search = '%' . $request->string('q') . '%';
      $q->where('code', 'like', $search);
  })
  ->latest('id')
  ->paginate(20);</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.data-layer.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. TRANSACTIONS & ATOMIC DATA CONSISTENCY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-lock fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_11') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. OBSERVABILITY, DEBUGGING, & QUERY METRICS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-chart-line fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_14') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. PRE-MERGE DATA LAYER REVIEW CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_11') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_31') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_12') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_15') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. TEAM ENGINEERING STANDARDS & STRICT DATA RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_12') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_32') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_18') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_21') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_22') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_6') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_7') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 13. MANDATORY DB TRANSACTION USE-CASES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-bank fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_13') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_18') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.data-layer.warn_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 14. STANDARD ATOMIC DB TRANSACTION TEMPLATE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_14') }}
                            </h4>
                            <pre class="schema-code"><code>DB::transaction(function () use ($payload) {
  $order = Order::create([
    'user_id' => auth()->id(),
    'code'    => generate_order_code(),
    'total'   => $payload['total'],
  ]);

  foreach ($payload['items'] as $item) {
    $order->items()->create([...]);
    Product::whereKey($item['product_id'])
      ->decrement('stock', $item['qty']);
  }

  $order->refresh();
});

// Post-commit side effects: trigger event/job after transaction commits</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 15. STRICT PULL REQUEST REVIEW GATE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-filter-search fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_15') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_28') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_23') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_24') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_25') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_26') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <!--====================================================-->
                <!-- INDONESIAN LOCALE CONTENT -->
                <!--====================================================-->
                <div class="schema-grid">
                    <!--====================================================-->
                    <!-- 1. CORE COMPONENTS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-folder fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_1') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_1') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_2') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_19') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_20') !!}</li>
                            </ul>
                            <div class="schema-meta mt-3">
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_1') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_2') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_3') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 2. END-TO-END DATA LIFECYCLE FLOW -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-route fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_2') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 3. ELOQUENT MODEL STRUCTURE & RELATIONSHIPS -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-code fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_3') }}
                            </h4>
                            <pre class="schema-code"><code>app/Models/
├─ User.php
├─ Order.php
├─ OrderItem.php
├─ Product.php
└─ ...

// {{ __('help.pages.skema.data-layer.code_1') }}
- User hasMany Order
- Order belongsTo User
- Order hasMany OrderItem
- OrderItem belongsTo Order
- OrderItem belongsTo Product</code></pre>
                            <ul class="schema-list mt-4 fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_23') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_4') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 4. MIGRATION STANDARDS & INDEXING STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-file-up fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_4') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_29') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 5. MIGRATION SCHEMA & INDEX COMPOSITION EXAMPLE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_5') }}
                            </h4>
                            <pre class="schema-code"><code>Schema::create('orders', function (Blueprint $table) {
  $table->id();
  $table->foreignId('user_id')->constrained()->cascadeOnDelete();
  $table->string('code')->unique();
  $table->decimal('total', 14, 2)->default(0);
  $table->timestamp('paid_at')->nullable();
  $table->timestamps();

  // Indeks Majemuk untuk optimasi query filter
  $table->index(['user_id', 'paid_at']);
});</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.data-layer.note_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 6. SEEDER & FACTORY GRAPH STRATEGY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-graph-2 fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_6') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code mt-4"><code>// Contoh Factory Relationship Graph:
User::factory()
  ->count(20)
  ->has(Order::factory()->count(3))
  ->create();</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 7. OPTIMIZED QUERY PATTERNS & N+1 PREVENTION -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-flash-circle fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_7') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_30') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_10') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 8. SAFE QUERY EXAMPLE (SELECTIVE SELECT + EAGER LOADING + PAGINATION) -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-tick fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_8') }}
                            </h4>
                            <pre class="schema-code"><code>$orders = Order::query()
  ->select(['id', 'user_id', 'code', 'total', 'paid_at', 'created_at'])
  ->with(['user:id,name,email'])
  ->when($request->filled('status'), function ($q) use ($request) {
      $q->where('status', $request->string('status'));
  })
  ->when($request->filled('q'), function ($q) use ($request) {
      $search = '%' . $request->string('q') . '%';
      $q->where('code', 'like', $search);
  })
  ->latest('id')
  ->paginate(20);</code></pre>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.data-layer.warn_1') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 9. TRANSACTIONS & ATOMIC DATA CONSISTENCY -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-lock fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_9') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_11') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 10. OBSERVABILITY, DEBUGGING, & QUERY METRICS -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-chart-line fs-2 text-info me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_10') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_14') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 11. PRE-MERGE DATA LAYER REVIEW CHECKLIST -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-check-square fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_11') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_31') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_11') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_12') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_13') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_14') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_15') !!}</div>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 12. TEAM ENGINEERING STANDARDS & STRICT DATA RULES -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-shield-cross fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_12') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_32') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_16') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_17') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_18') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_19') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_20') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_21') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_22') !!}</div>
                            </div>
                            <div class="schema-meta mt-4">
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_4') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_5') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_6') !!}</span>
                                <span class="schema-chip">{!! __('help.pages.skema.data-layer.chip_7') !!}</span>
                            </div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 13. MANDATORY DB TRANSACTION USE-CASES -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-bank fs-2 text-primary me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_13') }}
                            </h4>
                            <ul class="schema-list fs-7">
                                <li>{!! __('help.pages.skema.data-layer.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_18') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.data-layer.warn_2') !!}</div>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 14. STANDARD ATOMIC DB TRANSACTION TEMPLATE -->
                    <!--====================================================-->
                    <div class="schema-col-6">
                        <div class="schema-card h-100">
                            <h4 class="d-flex align-items-center">
                                <i class="ki-duotone ki-code fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_14') }}
                            </h4>
                            <pre class="schema-code"><code>DB::transaction(function () use ($payload) {
  $order = Order::create([
    'user_id' => auth()->id(),
    'code'    => generate_order_code(),
    'total'   => $payload['total'],
  ]);

  foreach ($payload['items'] as $item) {
    $order->items()->create([...]);
    Product::whereKey($item['product_id'])
      ->decrement('stock', $item['qty']);
  }

  $order->refresh();
});

// Side effect pasca-commit: jalankan event/job setelah transaksi commit</code></pre>
                        </div>
                    </div>

                    <!--====================================================-->
                    <!-- 15. STRICT PULL REQUEST REVIEW GATE -->
                    <!--====================================================-->
                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4 class="d-flex align-items-center mb-3">
                                <i class="ki-duotone ki-filter-search fs-2 text-warning me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                {{ __('help.pages.skema.data-layer.heading_15') }}
                            </h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_28') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_23') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_24') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_25') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_26') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
