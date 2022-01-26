<svg width="297mm" height="210mm" version="1.1" viewBox="0 0 297 210" xmlns="http://www.w3.org/2000/svg">

    <g stroke="#000000" stroke-width="0.23665" fill="#e6e6e6" fill-rule="evenodd">
        <rect x="9.09" y="108" width="166" height="98.5" />

        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F1')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','1')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F1') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="26.5" y="5.29" width="21.2" height="37" ></rect>
        </a>
        <!--F2-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F2')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','2')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F2') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="47.6" y="5.29" width="21.2" height="37" />
        </a>
        <!--F3-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F3')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','3')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F3') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="68.8" y="5.29" width="21.2" height="37" />
        </a>
        <!--F4-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F4')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','4')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F4') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif            <rect class="lot" x="90" y="5.29" width="21.2" height="37" />
        </a>
        <!--F5-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F5')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','5')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F5') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="111" y="5.29" width="21.2" height="37" />
        </a>
        <!--F6-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F6')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','6')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F6') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="132" y="5.29" width="21.2" height="37" />
        </a>
        <!--F7-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F7')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','7')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F7') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="153" y="5.29" width="21.2" height="37" />
        </a>
        <!--F8-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F8')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','8')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F8') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="174" y="5.29" width="21.2" height="37" />
        </a>
        <!--F9-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F9')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','9')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F9') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="195" y="5.29" width="21.2" height="37" />
        </a>
        <!--F10-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F10')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','10')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F10') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="216" y="5.29" width="21.2" height="37" />
        </a>
        <!--F11-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F11')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','11')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F11') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="237" y="5.29" width="21.2" height="37" />
        </a>
        <!--F12-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F12')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','12')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F12') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="26.5" y="63.5" width="21.2" height="37" />
        </a>
        <!--F13-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F13')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','13')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F13') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="47.6" y="63.5" width="21.2" height="37" />
        </a>
        <!--F14-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F14')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','14')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F14') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="68.8" y="63.5" width="21.2" height="37" />
        </a>
        <!--F15-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F15')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','15')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F15') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="90" y="63.5" width="21.2" height="37" />
        </a>
        <!--F16-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F16')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','16')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F16') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="111" y="63.5" width="21.2" height="37" />
        </a>
        <!--F17-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F17')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','17')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F17') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="132" y="63.5" width="21.2" height="37" />
        </a>
        <!--F18-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F18')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','18')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F18') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="153" y="63.5" width="21.2" height="37" />
        </a>
        <!--F19-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F19')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','19')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F19') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="180" y="95.2" width="21.2" height="37" />
        </a>
        <!--F20-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F20')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','20')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F20') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="180" y="132" width="21.2" height="37" />
        </a>
        <!--F21-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F21')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','21')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F21') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="180" y="169" width="21.2" height="37" />
        </a>
        <!--F22-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F22')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','22')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F22') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="270" y="58.2" width="21.2" height="37" />
        </a>
        <!--F23-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F23')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','23')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F23') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="270" y="95.2" width="21.2" height="37" />
        </a>
        <!--F24-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F24')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','24')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F24') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="270" y="132" width="21.2" height="37" />
        </a>
        <!--F25-->
        @if($role == 'admin')
        @foreach($lots as $area_id => $lot)
        @if($area_id == 'F25')
        @if (isset($lot))
        <a href="{{ route('parkingStatus.show', $lot['book_id'])}}" style="<?php
                                                                            if ($lot['lot_status'] == 'approved') {
                                                                                echo '" fill="#cc1100';
                                                                            } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                                                                                echo '" fill="#fdfd66';
                                                                            }
                                                                            ?>">
            @else
            <a href="" style="<?php echo '" fill="#389738';
                                ?>">
                @endif
                @else
                @endif
                @endforeach
                @else
                <a href="{{ route('bookParking.edit', [$parkings->area_id, str_replace($parkings->area_id,'','25')]) }}" style="
        <?php foreach ($lots as $area_id => $lot) {
            if ($area_id == 'F25') {
                if (isset($lot)) {
                    if ($lot['lot_status'] == 'approved') {
                        echo 'pointer-events: none" fill="#cc1100';
                    } elseif ($lot['lot_status'] == 'pending' || 'notpaid') {
                        echo 'pointer-events: none" fill="#fdfd66';
                    }
                } else {
                    echo '" fill="#389738';
                }
            }
        }
        ?>">
                    @endif
            <rect class="lot" x="270" y="169" width="21.2" height="37" />
        </a>
    </g>

    <text x="71.472565" y="164.05362" fill="#000000" font-family="sans-serif" font-size="10.6px" stroke-width=".265" style="line-height:1.25" xml:space="preserve">
        <tspan x="71.472565" y="164.05362" stroke-width=".265">Blok F</tspan>
    </text>

    <g fill="#000000" font-family="sans-serif">
        <text transform="scale(.885 1.13)" x="3.0145299" y="50.220367" font-size="8.18px" style="line-height:1.25" xml:space="preserve">
            <tspan x="3.0145299" y="50.220367" stroke-width=".201">Entrance</tspan>
        </text>
        <g font-size="6.34px" stroke-width=".159">
            <text x="33" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="33" y="25" stroke-width=".159">F1</tspan>
            </text>
            <text x="55" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="55" y="25" stroke-width=".159">F2</tspan>
            </text>
            <text x="76" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="76" y="25" stroke-width=".159">F3</tspan>
            </text>
            <text x="97" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="97" y="25" stroke-width=".159">F4</tspan>
            </text>
            <text x="117" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="117" y="25" stroke-width=".159">F5</tspan>
            </text>
            <text x="138" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="138" y="25" stroke-width=".159">F6</tspan>
            </text>
            <text x="160" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="160" y="25" stroke-width=".159">F7</tspan>
            </text>
            <text transform="scale(1 1)" x="181" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="181" y="25" stroke-width=".159">F8</tspan>
            </text>
            <text x="202" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="202" y="25" stroke-width=".159">F9</tspan>
            </text>
            <text x="220" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="220" y="25" stroke-width=".159">F10</tspan>
            </text>
            <text x="243" y="25" style="line-height:1.25" xml:space="preserve">
                <tspan x="243" y="25" stroke-width=".159">F11</tspan>
            </text>
            <text x="31" y="83.85479" style="line-height:1.25" xml:space="preserve">
                <tspan x="31" y="83.85479" stroke-width=".159">F12</tspan>
            </text>
            <text x="53" y="83.85479" style="line-height:1.25" xml:space="preserve">
                <tspan x="53" y="83.85479" stroke-width=".159">F13</tspan>
            </text>
            <text x="74" y="83.720436" style="line-height:1.25" xml:space="preserve">
                <tspan x="74" y="83.720436" stroke-width=".159">F14</tspan>
            </text>
            <text x="95" y="83.720436" style="line-height:1.25" xml:space="preserve">
                <tspan x="95" y="83.720436" stroke-width=".159">F15</tspan>
            </text>
            <text x="115" y="83.839287" style="line-height:1.25" xml:space="preserve">
                <tspan x="115" y="83.839287" stroke-width=".159">F16</tspan>
            </text>
            <text x="136" y="83.720436" style="line-height:1.25" xml:space="preserve">
                <tspan x="136" y="83.720436" stroke-width=".159">F17</tspan>
            </text>
            <text x="158" y="83.870293" style="line-height:1.25" xml:space="preserve">
                <tspan x="158" y="83.870293" stroke-width=".159">F18</tspan>
            </text>
            <text x="185" y="116" style="line-height:1.25" xml:space="preserve">
                <tspan x="185" y="116" stroke-width=".159">F19</tspan>
            </text>
            <text x="185" y="152" style="line-height:1.25" xml:space="preserve">
                <tspan x="185" y="152" stroke-width=".159">F20</tspan>
            </text>
            <text x="185" y="187" style="line-height:1.25" xml:space="preserve">
                <tspan x="185" y="187" stroke-width=".159">F21</tspan>
            </text>
            <text x="275" y="80" style="line-height:1.25" xml:space="preserve">
                <tspan x="275" y="80" stroke-width=".159">F22</tspan>
            </text>
            <text transform="scale(1 .997)" x="275" y="116" style="line-height:1.25" xml:space="preserve">
                <tspan x="275" y="116" stroke-width=".159">F23</tspan>
            </text>
            <text transform="scale(.995 1.01)" x="277" y="152" style="line-height:1.25" xml:space="preserve">
                <tspan x="277" y="152" stroke-width=".159">F24</tspan>
            </text>
            <text x="275" y="187" style="line-height:1.25" xml:space="preserve">
                <tspan x="275" y="187" stroke-width=".159">F25</tspan>
            </text>
        </g>
</svg>