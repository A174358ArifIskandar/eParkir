<svg width="297mm" height="210mm" version="1.1" viewBox="0 0 297 210" xmlns="http://www.w3.org/2000/svg">

    <g stroke="#000000" stroke-width="0.23665" fill="#e6e6e6" fill-rule="evenodd">
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D1')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','1')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','1')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D1')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','1')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','1')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','1')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                    <rect class="lot" x="8.13" y="156" width="21" height="42.8" />
                </a>
                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D2')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','2')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','2')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D2')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','2')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','2')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','2')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                            <rect class="lot" x="29.3" y="156" width="21" height="42.8" />
                        </a>
                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D3')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','3')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','3')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D3')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','3')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','3')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','3')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                    <rect class="lot" x="50.5" y="156" width="21" height="42.8" />
                                </a>
                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D4')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','4')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','4')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D4')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','4')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','4')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','4')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                            <rect class="" x="71.6" y="156" width="21" height="42.8" />
                                        </a>
                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D5')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','5')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','5')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D5')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','5')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','5')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','5')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                                    <rect class="lot" x="92.8" y="156" width="21" height="42.8" />
                                                </a>
                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D6')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','6')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','6')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D6')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','6')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','6')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','6')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                                            <rect class="lot" x="114" y="156" width="21" height="42.8" />
                                                        </a>
                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D7')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','7')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','7')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D7')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','7')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','7')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','7')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                                                    <rect class="lot" x="135" y="156" width="21" height="42.8" />
                                                                </a>
                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D8')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','8')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','8')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D8')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','8')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','8')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','8')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                                                            <rect class="lot" x="156" y="156" width="21" height="42.8" />
                                                                        </a>
                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D9')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','9')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','9')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D9')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','9')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','9')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','9')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                                                                    <rect class="lot" x="177" y="156" width="21" height="42.8" />
                                                                                </a>
                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D10')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','10')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','10')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D10')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','10')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','10')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','10')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                                                                            <rect class="lot" x="198" y="156" width="21" height="42.8" />
                                                                                        </a>
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D11')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','11')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','11')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D11')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','11')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','11')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','11')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif
                                                                                                    <rect class="lot" x="198" y="91.6" width="21" height="42.8" />
                                                                                                </a>
                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D12')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','12')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','12')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D12')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','12')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','12')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','12')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                            <rect class="lot" x="177" y="91.6" width="21" height="42.8" />
                                                                                                        </a>
                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D13')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','13')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','13')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D13')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','13')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','13')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','13')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                    <rect class="lot" x="156" y="91.6" width="21" height="42.8" />
                                                                                                                </a>
                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D14')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','14')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','14')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D14')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','14')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','14')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','14')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                            <rect class="lot" x="135" y="91.6" width="21" height="42.8" />
                                                                                                                        </a>
                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D15')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','15')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','15')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D15')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','15')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','15')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','15')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                    <rect class="lot" x="114" y="91.6" width="21" height="42.8" />
                                                                                                                                </a>
                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D16')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','16')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','16')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D16')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','16')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','16')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','16')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                            <rect class="lot" x="92.8" y="91.6" width="21" height="42.8" />
                                                                                                                                        </a>
                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D17')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','17')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','17')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D17')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','17')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','17')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','17')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                    <rect class="lot" x="71.6" y="91.6" width="21" height="42.8" />

                                                                                                                                                </a>
                                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D18')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','18')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','18')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D18')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','18')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','18')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','18')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                            <rect class="lot" x="50.5" y="91.6" width="21" height="42.8" />
                                                                                                                                                        </a>
                                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D19')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','19')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','19')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D19')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','19')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','19')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','19')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                    <rect class="lot" x="50.5" y="48.7" width="21" height="42.8" />
                                                                                                                                                                </a>
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D20')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','20')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','20')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D20')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','20')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','20')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','20')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                            <rect class="lot" x="71.6" y="48.7" width="21" height="42.8" />
                                                                                                                                                                        </a>
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D21')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','21')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','21')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D21')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','21')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','21')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','21')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           <rect class="lot" x="92.8" y="48.7" width="21" height="42.8" />

                                                                                                                                                                                </a>
                                                                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D22')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','22')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','22')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D22')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','22')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','22')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','22')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                            <rect class="lot" x="114" y="48.7" width="21" height="42.8" />
                                                                                                                                                                                        </a>
                                                                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D23')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','23')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','23')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D23')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','23')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','23')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','23')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                          

                                                                                                                                                                                                    <rect class="lot" x="135" y="48.7" width="21" height="42.8" />
                                                                                                                                                                                                </a>
                                                                                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D24')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','24')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','24')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D24')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','24')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','24')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','24')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                          

                                                                                                                                                                                                            <rect class="lot" x="156" y="48.7" width="21" height="42.8" />
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D25')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','25')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','25')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D25')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','25')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','25')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','25')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                                                    <rect class="lot" x="177" y="48.7" width="21" height="42.8" />
                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D26')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','26')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','26')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D26')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','26')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','26')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','26')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                                                            <rect class="lot" x="198" y="48.7" width="21" height="42.8" />
                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D27')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','27')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','27')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D27')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','27')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','27')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','27')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                                                                    <rect class="lot" x="270" y="91.6" width="21" height="42.8" />

                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D28')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','28')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','28')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D28')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','28')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','28')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','28')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                                                                            <rect class="lot" x="270" y="48.8" width="21" height="42.8" />
                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D29')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','29')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','29')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D29')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','29')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','29')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','29')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                          

                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="5.16" y="-219" width="21" height="42.8" />

                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D30')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','30')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','30')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D30')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','30')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','30')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','30')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="5.16" y="-176" width="21" height="42.8" />
                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D31')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','31')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','31')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D31')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','31')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','31')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','31')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="5.16" y="-134" width="21" height="42.8" />
                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D32')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','32')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','32')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D32')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','32')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','32')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','32')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                           

                                                                                                                                                                                                                                                                            <rect class="lot" transform="rotate(90)" x="5.16" y="-90.9" width="21" height="42.8" />
                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'D33')
        @if (isset($lot))
        @if ($lot['lot_status'] == 'disabled')
        <a href="{{ route('profile.edit', [$parkings->area_id, $lot['book_id'], str_replace($parkings->area_id,'','33')]) }}" style="<?php echo '" fill="#808080'; ?>">
            @else
            <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                                if ($lot['lot_status'] == 'approved') {
                                                                                    echo '" fill="#cc1100';
                                                                                } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                    echo '" fill="#fde52f';
                                                                                }
                                                                                ?>">
                @endif
                @else
                <a href="{{ route('parkingArea.edit', [$parkings->area_id, str_replace($parkings->area_id,'','33')]) }}" style="<?php echo '" fill="#339900';
                                                                                                                                ?>">
                    @endif
                    @else
                    @endif
                    @endforeach
                    @else
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'D33')
                    @if (isset($lot))
                    @if ($lot['lot_status'] == 'disabled')
                    <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','33')]) }}" style="<?php echo 'pointer-events: none" fill="#808080'; ?>">
                        @else
                        <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','33')]) }}" style="
                    <?php if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fde52f';
                    }
                    ?>">
                            @endif
                            @else
                            <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','33')]) }}" style="<?php echo '" fill="#339900'; ?>">
                                @endif
                                @else
                                @endif
                                @endforeach
                                @endif                                                                                                                                                                                      

                                                                                                                                                                                                                                                                                    <rect class="lot" transform="rotate(90)" x="5.29" y="-48" width="21" height="42.8" />
                                                                                                                                                                                                                                                                                </a>
    </g>
    <g fill="#000000" font-family="sans-serif">
        <text x="239.71254" y="26.458332" style="line-height:1.25" font-size="8.18px" xml:space="preserve">
            <tspan x="239.71254" y="26.458332" stroke-width=".265">Entrance</tspan>
        </text>
        <g font-size="6.34px" stroke-width=".159">
            <text x="15" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="15" y="180" stroke-width=".159">D1</tspan>
            </text>
            <text x="36" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="36" y="180" stroke-width=".159">D2</tspan>
            </text>
            <text x="57" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="57" y="180" stroke-width=".159">D3</tspan>
            </text>
            <text x="78" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="78" y="180" stroke-width=".159">D4</tspan>
            </text>
            <text x="99" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="99" y="180" stroke-width=".159">D5</tspan>
            </text>
            <text x="120" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="120" y="180" stroke-width=".159">D6</tspan>
            </text>
            <text x="142" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="142" y="180" stroke-width=".159">D7</tspan>
            </text>
            <text x="163" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="163" y="180" stroke-width=".159">D8</tspan>
            </text>
            <text x="184" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="184" y="180" stroke-width=".159">D9</tspan>
            </text>
            <text x="203" y="180" style="line-height:1.25" xml:space="preserve">
                <tspan x="203" y="180" stroke-width=".159">D10</tspan>
            </text>
            <text x="203" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="203" y="113.5" stroke-width=".159">D11</tspan>
            </text>
            <text x="181" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="181" y="113.5" stroke-width=".159">D12</tspan>
            </text>
            <text x="160" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="160" y="113.5" stroke-width=".159">D13</tspan>
            </text>
            <text x="140" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="140" y="113.5" stroke-width=".159">D14</tspan>
            </text>
            <text x="119" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="119" y="113.5" stroke-width=".159">D15</tspan>
            </text>
            <text x="97" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="97" y="113.5" stroke-width=".159">D16</tspan>
            </text>
            <text x="77" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="77" y="113.5" stroke-width=".159">D17</tspan>
            </text>
            <text x="56" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="56" y="113.5" stroke-width=".159">D18</tspan>
            </text>
            <text x="56" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="56" y="71" stroke-width=".159">D19</tspan>
            </text>
            <text x="77" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="77" y="71" stroke-width=".159">D20</tspan>
            </text>
            <text x="97" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="97" y="71" stroke-width=".159">D21</tspan>
            </text>
            <text x="119" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="119" y="71" stroke-width=".159">D22</tspan>
            </text>
            <text x="140" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="140" y="71" stroke-width=".159">D23</tspan>
            </text>
            <text x="160" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="160" y="71" stroke-width=".159">D24</tspan>
            </text>
            <text x="181" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="181" y="71" stroke-width=".159">D25</tspan>
            </text>
            <text x="203" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="203" y="71" stroke-width=".159">D26</tspan>
            </text>
            <text x="275" y="113.5" style="line-height:1.25" xml:space="preserve">
                <tspan x="275" y="113.5" stroke-width=".159">D27</tspan>
            </text>
            <text x="275" y="71" style="line-height:1.25" xml:space="preserve">
                <tspan x="275" y="71" stroke-width=".159">D28</tspan>
            </text>
            <text x="190" y="18.155447" style="line-height:1.25" xml:space="preserve">
                <tspan x="190" y="18.155447" stroke-width=".159">D29</tspan>
            </text>
            <text x="147" y="18.021435" style="line-height:1.25" xml:space="preserve">
                <tspan x="147" y="18" stroke-width=".159">D30</tspan>
            </text>
            <text x="105" y="18" style="line-height:1.25" xml:space="preserve">
                <tspan x="105" y="18" stroke-width=".159">D31</tspan>
            </text>
            <text x="64" y="18.52083" style="line-height:1.25" xml:space="preserve">
                <tspan x="64" y="18" stroke-width=".159">D32</tspan>
            </text>
            <text x="20" y="17.887434" style="line-height:1.25" xml:space="preserve">
                <tspan x="20" y="18" stroke-width=".159">D33</tspan>
            </text>
        </g>
    </g>
</svg>