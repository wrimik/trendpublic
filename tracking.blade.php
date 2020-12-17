@extends('public-site.public-parts.public-layout')
@section('content')
    <div class="home-page">
        <section class="bg-white">
            <div class=" banner-content" style="min-height:90vh">

                @if(@$data['tracking_id'])
                    <div class="container">
                        <h3 class="heading ">Tracking Results</h3>
                        <div class="row">
                            <div class="col-12 pb-3">
                                <div class="alert-warning text-center p-2">
                                    <b>Notice:</b> <br>
                                    Due to historically high demand, covid safety precautions, and the wild fires,
                                    the entire logistics industry is experiencing delayed transit times. <br> <br>
                                    We are working as quickly as possible to get your shipments to their destinations.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                @if(@$data['tracking_id'] && !$shipment)
                                <div class="col-12">
                                    <div class="alert alert-warning text-center">
                                        <h5>Tracking # "{{ $data['tracking_id']  }}"</h5>
                                        No Results For This Tracking Number.
                                    </div>
                                </div>
                                @elseif(@$data['tracking_id'] && $shipment)
                                    <div class="col-12 ">
                                        <div class="card shadow-sm border-0 mb-5">
                                            <div class="card-header bg-info text-white">
                                                <h5>Tracking # "{{ $data['tracking_id']  }}"</h5>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th style="min-width:200px">Date</th>
                                                    <th>Status</th>
                                                    <th>Description</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if($shipment->current_status == 'DELIVERED' && ( !$shipment->statusUpdates || @$shipment->statusUpdates[0]->status_reason_code != 'DELIVERED'))
                                                    <tr style="min-width:195px">
                                                        <td>{{ $shipment->statusUpdates ? @$shipment->statusUpdates[0]->event_time : $shipment->updated_at }}</td>
                                                        <td>DELIVERED</td>
                                                        <td></td>
                                                    </tr>
                                                @endif
                                                @if($shipment->current_status != 'DELIVERED')
                                                    <tr style="min-width:195px" class="table-info">
                                                            <td>{{ @$shipment->expected_delivery_date }}</td>
                                                        <td>EXPECTED_DELIVERY</td>
                                                        <td></td>
                                                    </tr>
                                                @endif
                                                @foreach($shipment->statusUpdates as $update )
                                                    <tr>
                                                        <td>{{ $update->event_time }}</td>
                                                        <td>@if($update->status_code == 'COMPLETE' || $update->status_code == 'COMPLETED')
                                                                LINEHAUL COMPLETE - ARRIVED AT TERMINAL
                                                            @else
                                                                {{ $update->status_code ?: $update->status_reason_code }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $update->status_description }}
                                                            {{ $update->status_detail }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @if( !$shipment->statusUpdates->count() )
                                                    <tr style="min-width:195px" class="table-info">
                                                        <td>{{ $shipment->pickup_window_start }}</td>
                                                        <td>SCHEDULED PICKUP</td>
                                                        <td></td>
                                                    </tr>
                                                @endif

                                                <tr style="min-width:195px">
                                                    <td>{{ $shipment->created_at }}</td>
                                                    <td>ORDER_PLACED</td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                        </div>
                    </div>
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card border-0 shadow-sm rounded-lg">
                                <div class="card-body bg-light rounded">
                                    <h5 class="heading py-0">{{ @$data['tracking_id'] ? 'Search Again' : 'Search' }}</h5>
                                    @include('public-site.public-parts.tracking-form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection