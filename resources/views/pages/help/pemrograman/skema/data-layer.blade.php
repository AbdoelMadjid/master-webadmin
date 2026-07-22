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
            {{ __('help.skema') }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="schema-shell">
                <div class="schema-hero">
                    <span class="schema-pill">Data Layer</span>
                    <h2 class="fw-bold">{{ __('help.skema_data_layer') }}</h2>
                    <p class="schema-lead">
                        {{ __('help.pages.skema.data-layer.lead') }}
                    </p>
                </div>

                <div class="schema-grid">
                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_1') !!}</h4>
                            <ul class="schema-list">
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

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_2') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_27') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_1') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_2') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_3') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_4') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_3') !!}</h4>
                            <pre class="schema-code"><code>app/Models/
├─ User.php
├─ Order.php
├─ OrderItem.php
├─ Product.php
└─ ...

{{ __('help.pages.skema.data-layer.code_1') }}
- User hasMany Order
- Order belongsTo User
- Order hasMany OrderItem
- OrderItem belongsTo Order
- OrderItem belongsTo Product</code></pre>
                            <ul class="schema-list mt-4">
                                <li>{!! __('help.pages.skema.data-layer.item_3') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_23') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_4') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_4') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_29') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_5') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_6') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_7') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_5') !!}</h4>
                            <pre class="schema-code"><code>Schema::create('orders', function (Blueprint $table) {
  $table->id();
  $table->foreignId('user_id')->constrained()->cascadeOnDelete();
  $table->string('code')->unique();
  $table->decimal('total', 14, 2)->default(0);
  $table->timestamp('paid_at')->nullable();
  $table->timestamps();

  $table->index(['user_id', 'paid_at']);
});</code></pre>
                            <div class="schema-note mt-4">{!! __('help.pages.skema.data-layer.note_1') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_6') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.data-layer.item_5') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_6') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_7') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_8') !!}</li>
                            </ul>
                            <pre class="schema-code mt-4"><code>// contoh pola
User::factory()
  ->count(20)
  ->has(Order::factory()->count(3))
  ->create();</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_7') !!}</h4>
                            <div class="schema-flow">
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_30') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_8') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_9') !!}</div>
                                <div class="schema-step">{!! __('help.pages.skema.data-layer.step_10') !!}</div>
                            </div>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_8') !!}</h4>
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

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_9') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.data-layer.item_9') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_21') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_10') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_11') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_10') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.data-layer.item_12') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_22') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_13') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_14') !!}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_11') !!}</h4>
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

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_12') !!}</h4>
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

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_13') !!}</h4>
                            <ul class="schema-list">
                                <li>{!! __('help.pages.skema.data-layer.item_15') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_16') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_17') !!}</li>
                                <li>{!! __('help.pages.skema.data-layer.item_18') !!}</li>
                            </ul>
                            <div class="schema-warn mt-4">{!! __('help.pages.skema.data-layer.warn_2') !!}</div>
                        </div>
                    </div>

                    <div class="schema-col-6">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_14') !!}</h4>
                            <pre class="schema-code"><code>DB::transaction(function () use ($payload) {
  $order = Order::create([...]);

  foreach ($payload['items'] as $item) {
    $order->items()->create([...]);
    Product::whereKey($item['product_id'])
      ->decrement('stock', $item['qty']);
  }

  $order->refresh();
});

// trigger event/job setelah commit bila perlu</code></pre>
                        </div>
                    </div>

                    <div class="schema-col-12">
                        <div class="schema-card">
                            <h4>{!! __('help.pages.skema.data-layer.heading_15') !!}</h4>
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
            </div>
        </div>
    </div>
@endsection
