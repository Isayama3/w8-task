@extends('admin.layouts.partials.crud-components.table', [
    'page_header' => __('products'),
])

@section('filter')
    @include('admin.products.filter', [
        'create_route' => $create_route,
    ])
@stop

@section('table_headers')
    <th class="min-w-30 text-center"># </th>
    <th class="min-w-125px max-w-215px text-center">{{ __('thumbnail') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('sku') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('title') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('description') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('category') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('price') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('discountPercentage') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('rating') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('stock') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('brand') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('warrantyInformation') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('shippingInformation') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('availabilityStatus') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('returnPolicy') }}</th>
    <th class="min-w-125px max-w-215px text-center">{{ __('minimumOrderQuantity') }}</th>
    {{-- <th class="min-w-125px max-w-215px text-center">{{ __('admin.created_at_&_updated_at') }}</th> --}}

@stop

@section('table_body')
    @foreach ($records as $record)
        <tr class="odd text-center" id="removable{{ $record->id }}">
            <td>{{ $loop->iteration }}</td>
            <td>
                <div class="d-flex align-items-center" style="justify-content: center;">
                    <a href="#" class="symbol symbol-50px">
                        <span class="symbol-label" style="background-image:url({{ $record->thumbnail }});"></span>
                    </a>
                </div>
            </td>

            <td>{{ $record->sku }}</td>
            <td>{{ $record->title }}</td>
            <td>{{ $record->description }}</td>
            <td>{{ $record->category }}</td>
            <td>{{ $record->price }}</td>
            <td>{{ $record->discountPercentage }}</td>
            <td>{{ $record->rating }}</td>
            <td>{{ $record->stock }}</td>
            <td>{!! $record->brand ??
                '<span class="badge badge-light-danger">
                                    no brand
                                </span>' !!}</td>
            <td>{{ $record->warrantyInformation }}</td>
            <td>{{ $record->shippingInformation }}</td>
            <td>{{ $record->availabilityStatus }}</td>
            <td>{{ $record->returnPolicy }}</td>
            <td>{{ $record->minimumOrderQuantity }}</td>
            {{-- <td>
                <div class="badge badge-light-primary">
                    {{ __('admin.created_at') }}&nbsp;&nbsp;:&nbsp;&nbsp;
                    {{ $record->created_at }}
                </div>
                <div class="badge badge-light-primary">
                    {{ __('admin.updated_at') }}&nbsp;&nbsp;:&nbsp;&nbsp;
                    {{ $record->updated_at }}
                </div>
            </td> --}}
            <td class="text-end">
                @include('admin.layouts.partials.crud-components.actions-buttons', [
                    'hasShow' => $hasShow,
                    'hasEdit' => $hasEdit,
                    'hasDelete' => $hasDelete,
                    'show_route' => $show_route,
                    'edit_route' => $edit_route,
                    'destroy_route' => $destroy_route,
                    'record' => $record,
                ])
            </td>
        </tr>
    @endforeach
@stop
