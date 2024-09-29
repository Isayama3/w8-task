<form class="form" data-parsley-validate>
    <div class="card-body" data-select2-id="select2-data-133-g1fv">
        <div class="" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
            <div style="display: inline-flex; gap:15px;">
                <span>
                    <input type="text" class="form-control ps-10" name="filter[search]" value=""
                        placeholder="{{ __('search') }}">
                </span>
                <span>
                    <button type="submit" class="btn btn-primary me-5"><i
                            class="fas fa-search-plus"></i>{{ __('search') }}</button>
                    <a href="#" id="kt_horizontal_search_advanced_link" class="btn btn-link collapsed"
                        data-bs-toggle="collapse" data-bs-target="#kt_advanced_search_form"
                        aria-expanded="false">{{ __('advanced search') }}</a>
                </span>
            </div>
            <div class="" style="display: flex;flex-direction: row;">
                <button class="btn btn-danger m-1" type="submit" id="reset-then-submit" data-bs-toggle="collapse"><i
                        class="fas fa-search-minus"></i>
                    {{ __('reset search') }}
                </button>
                @if ($create_route && $hasCreate)
                    {{-- @can($storePermission) --}}
                        <a href="{{ route($create_route) }}">
                            <button href class="btn btn-primary m-1 float-end" type="button">
                                <i class="bi bi-plus-lg"></i>
                                {{ __('add_new') }}
                            </button>
                        </a>
                    {{-- @endcan --}}
                @endif
            </div>
        </div>

        <div class="collapse" id="kt_advanced_search_form" style=""
            data-select2-id="select2-data-kt_advanced_search_form">
            <div class="separator separator-dashed mt-9 mb-6"></div>
            <div class="row g-8 mb-8" data-select2-id="select2-data-144-h32u">
                <div class="col-xxl-12">
                    <div class="row g-8">
                        @foreach ($filters as $filter)
                            <div class="col-md-3 col-12">
                                {{ call_user_func_array([App\Base\Helper\Field::class, $filter['type']], array_pad([$filter['name'], $filter['label'], isset($filter['options']) ? $filter['options'] : null], 5, null)) }}
                            </div>
                        @endforeach
                        @foreach ($init_filters ?? [] as $filter)
                            <input name="filter[{{ $filter['name'] }}]" value="{{ $filter['value'] }}" hidden>
                        @endforeach
                        <div class="col-md-3 col-12">
                            {{ \App\Base\Helper\Field::date(name: 'filter[created_from]', label: 'created_from', required: 'false') }}
                        </div>
                        <div class="col-md-3 col-12">
                            {{ \App\Base\Helper\Field::date(name: 'filter[created_to]', label: 'created_to', required: 'false') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#reset-then-submit').click(function() {
                $('form')[0].reset();
                $('form').submit();
            });
        });
    </script>
@endpush
