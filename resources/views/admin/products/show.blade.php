@extends('admin.layouts.partials.crud-components.show-page', [
    'page_header' => __('product details'),
])
@section('show-page')
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <div class="card card-flush py-4">
            <div class="card-body text-center pt-5">
                <h2>{{ __('thumbnail') }}</h2>
                {{ \App\Base\Helper\Field::fileWithPreview(name: 'thumbnail', label: '', required: true, old_image: $record->thumbnail, disabled: true) }}
            </div>
        </div>
        <div class="card card-flush py-4">
            <div class="card-body text-center pt-5">
                <h2>{{ __('BarCode') }}</h2>
                {{ \App\Base\Helper\Field::fileWithPreview(name: 'thumbnail', label: $record->Meta->barcode, required: true, old_image: $record->Meta->qrCode, disabled: true) }}
            </div>
        </div>
        {{-- <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <h2>
                        @if ($record->active)
                            {{ __('active') }}
                        @else
                            {{ __('not_active') }}
                        @endif
                    </h2>
                </div>
                <div class="card-toolbar">
                    @if ($record->active)
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                    @else
                        <div class="rounded-circle bg-danger w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                    @endif
                </div>
            </div>
        </div> --}}
    </div>
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <div class="card card-flush py-4">
            <div class="card-header justify-content-center">
                <div class="card-title">
                    <h2>{{ __('main data') }}</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'sku', label: 'sku', value: $record->sku ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'title', label: 'title', value: $record->title ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', value: $record->description ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'category', label: 'category', value: $record->category ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'price', label: 'price', value: $record->price ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'discountPercentage', label: 'discountPercentage', value: $record->discountPercentage ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'rating', label: 'rating', value: $record->rating ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'stock', label: 'stock', value: $record->stock ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'brand', label: 'brand', value: $record->brand ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'warrantyInformation', label: 'warrantyInformation', value: $record->warrantyInformation ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'shippingInformation', label: 'shippingInformation', value: $record->shippingInformation ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'availabilityStatus', label: 'availabilityStatus', value: $record->availabilityStatus ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'shippingInformation', label: 'shippingInformation', value: $record->shippingInformation ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'returnPolicy', label: 'returnPolicy', value: $record->returnPolicy ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'minimumOrderQuantity', label: 'minimumOrderQuantity', value: $record->minimumOrderQuantity ?? __('undifined'), disabled: true) }}
                    </div>
                    <hr>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'weight', label: 'weight', value: $record->Dimensions->weight ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'height', label: 'height', value: $record->Dimensions->height ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'width', label: 'width', value: $record->Dimensions->width ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'depth', label: 'depth', value: $record->Dimensions->depth ?? __('undifined'), disabled: true) }}
                    </div>
                    <hr>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'createdAt', label: 'createdAt', value: $record->Meta->createdAt ?? __('undifined'), disabled: true) }}
                    </div>
                    <div class="col-md-4">
                        {{ \App\Base\Helper\Field::text(name: 'updatedAt', label: 'updatedAt', value: $record->Meta->updatedAt ?? __('undifined'), disabled: true) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-flush py-4">
            <div class="card-header justify-content-center">
                <div class="card-title">
                    <h2>{{ __('tags') }}</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">

                                <th class="min-w-125px max-w-215px text-center">#</th>
                                <th class="min-w-125px max-w-215px text-center">{{ __('tag') }}</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record->tags ?? [] as $product)
                                <tr class="odd text-center" id="removable{{ $product->id }}">
                                    <td> {{ $loop->iteration }}</td>
                                    <td>
                                        <span class="badge badge-success">{{ $product->tag }}</span>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card card-flush py-4">
            <div class="card-header justify-content-center">
                <div class="card-title">
                    <h2>{{ __('images') }}</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">

                                <th class="min-w-125px max-w-215px text-center">#</th>
                                <th class="min-w-125px max-w-215px text-center">{{ __('image') }}</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record->images ?? [] as $product)
                                <tr class="odd text-center" id="removable{{ $product->id }}">
                                    <td> {{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center" style="justify-content: center;">
                                            <a href="#" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url({{ $product->image }});"></span>
                                            </a>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="card card-flush py-4">
            <div class="card-header justify-content-center">
                <div class="card-title">
                    <h2>{{ __('rating') }}</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">

                                <th class="min-w-125px max-w-215px text-center">#</th>
                                <th class="min-w-125px max-w-215px text-center">{{ __('rating') }}</th>
                                <th class="min-w-125px max-w-215px text-center">{{ __('comment') }}</th>
                                <th class="min-w-125px max-w-215px text-center">{{ __('reviewerName') }}</th>
                                <th class="min-w-125px max-w-215px text-center">{{ __('reviewerEmail') }}</th>
                                <th class="min-w-125px max-w-215px text-center">{{ __('date') }}</th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record->reviews ?? [] as $product)
                                <tr class="odd text-center" id="removable{{ $product->id }}">
                                    <td> {{ $loop->iteration }}</td>
                                    <td>
                                        {{ $product->rating }}
                                    </td>
                                    <td>
                                        {{ $product->comment }}
                                    </td>
                                    <td>
                                        {{ $product->reviewerName }}
                                    </td>
                                    <td>
                                        {{ $product->reviewerEmail }}
                                    </td>
                                    <td>
                                        {{ $product->date }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
