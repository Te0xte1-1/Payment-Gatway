@if (!empty($data))
@foreach ($data as $item)
    <div class="col-md-12 col-sm-6 ">
        <div class="info-box">
            <div class="info-box-content">
                <span class="info-box-text">Product Name : <b id="ccat_id"> {{ $item->pro_id }}
                    </b></span>
                <span class="info-box-number">Price : <i class="fa fa-dollar-sign"></i>
                    <b id="uunit_cost_price">{{ $item->unit_cost_price }}</b></span>
                <span class="info-box-text">Product On Stock : <b id="qqty"> {{ $item->qty }}
                    </b></span>
            </div>
        </div>
       </div>
@endforeach
@else
نأسف لا توجد أصناف في هذا المخزن
@endif

