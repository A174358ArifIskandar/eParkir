<svg width="297mm" height="157mm" version="1.1" viewBox="0 0 297 157" xmlns="http://www.w3.org/2000/svg">
    <g transform="translate(8.61 -22.7)" fill="#e6e6e6" stroke="#000">
        <g stroke-width=".353">
            <!--1-->
            @if($role == 'admin')
            @foreach($lots as $area_id => $lot)
            @if($area_id == 'C1')
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
            if ($area_id == 'C1') {
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
                        <rect class="lot" x="38.1" y="47.5" width="21.8" height="37.7" />
                    </a>
                    <!--2-->
                    @if($role == 'admin')
                    @foreach($lots as $area_id => $lot)
                    @if($area_id == 'C2')
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
            if ($area_id == 'C2') {
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
                                <rect class="lot" x="59.9" y="47.5" width="21.8" height="37.7" />
                            </a>
                            <!--3-->
                            @if($role == 'admin')
                            @foreach($lots as $area_id => $lot)
                            @if($area_id == 'C3')
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
            if ($area_id == 'C3') {
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
                                        <rect class="lot" x="81.7" y="47.5" width="21.8" height="37.7" />
                                    </a>
                                    <!--4-->
                                    @if($role == 'admin')
                                    @foreach($lots as $area_id => $lot)
                                    @if($area_id == 'C4')
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
            if ($area_id == 'C4') {
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
                                                <rect class="lot" x="103" y="47.5" width="21.8" height="37.7" />
                                            </a>
                                            <!--5-->
                                            @if($role == 'admin')
                                            @foreach($lots as $area_id => $lot)
                                            @if($area_id == 'C5')
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
            if ($area_id == 'C5') {
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
                                                        <rect class="lot" x="125" y="47.5" width="21.8" height="37.7" />
                                                    </a>
                                                    <!--6-->
                                                    @if($role == 'admin')
                                                    @foreach($lots as $area_id => $lot)
                                                    @if($area_id == 'C6')
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
            if ($area_id == 'C6') {
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
                                                                <rect class="lot" x="147" y="47.5" width="21.8" height="37.7" />
                                                            </a>
                                                            <!--7-->
                                                            @if($role == 'admin')
                                                            @foreach($lots as $area_id => $lot)
                                                            @if($area_id == 'C7')
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
            if ($area_id == 'C7') {
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
                                                                        <rect class="lot" x="168" y="47.5" width="21.8" height="37.7" />
                                                                    </a>
                                                                    <!--8-->
                                                                    @if($role == 'admin')
                                                                    @foreach($lots as $area_id => $lot)
                                                                    @if($area_id == 'C8')
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
            if ($area_id == 'C8') {
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
                                                                                <rect class="lot" x="190" y="47.5" width="21.8" height="37.7" />
                                                                            </a>
                                                                            <!--9-->
                                                                            @if($role == 'admin')
                                                                            @foreach($lots as $area_id => $lot)
                                                                            @if($area_id == 'C9')
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
            if ($area_id == 'C9') {
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
                                                                                        <rect class="lot" x="212" y="47.5" width="21.8" height="37.7" />
                                                                                    </a>
                                                                                    <!--10-->
                                                                                    @if($role == 'admin')
                                                                                    @foreach($lots as $area_id => $lot)
                                                                                    @if($area_id == 'C10')
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
            if ($area_id == 'C10') {
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
                                                                                                <rect class="lot" x="235" y="112" width="21.8" height="37.7" />
                                                                                            </a>
                                                                                            <!--11-->
                                                                                            @if($role == 'admin')
                                                                                            @foreach($lots as $area_id => $lot)
                                                                                            @if($area_id == 'C11')
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
            if ($area_id == 'C11') {
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
                                                                                                        <rect class="lot" x="214" y="112" width="21.8" height="37.7" />
                                                                                                    </a>
                                                                                                    <!--12-->
                                                                                                    @if($role == 'admin')
                                                                                                    @foreach($lots as $area_id => $lot)
                                                                                                    @if($area_id == 'C12')
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
            if ($area_id == 'C12') {
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
                                                                                                                <rect class="lot" x="192" y="112" width="21.8" height="37.7" />
                                                                                                            </a>
                                                                                                            <!--13-->
                                                                                                            @if($role == 'admin')
                                                                                                            @foreach($lots as $area_id => $lot)
                                                                                                            @if($area_id == 'C13')
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
            if ($area_id == 'C13') {
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
                                                                                                                        <rect class="lot" x="170" y="112" width="21.8" height="37.7" />
                                                                                                                    </a>
                                                                                                                    <!--14-->
                                                                                                                    @if($role == 'admin')
                                                                                                                    @foreach($lots as $area_id => $lot)
                                                                                                                    @if($area_id == 'C14')
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
            if ($area_id == 'C14') {
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
                                                                                                                                <rect class="lot" x="148" y="112" width="21.8" height="37.7" />
                                                                                                                            </a>
                                                                                                                            <!--15-->
                                                                                                                            @if($role == 'admin')
                                                                                                                            @foreach($lots as $area_id => $lot)
                                                                                                                            @if($area_id == 'C15')
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
            if ($area_id == 'C15') {
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
                                                                                                                                        <rect class="lot" x="127" y="112" width="21.8" height="37.7" />
                                                                                                                                    </a>
                                                                                                                                    <!--16-->
                                                                                                                                    @if($role == 'admin')
                                                                                                                                    @foreach($lots as $area_id => $lot)
                                                                                                                                    @if($area_id == 'C16')
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
            if ($area_id == 'C16') {
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
                                                                                                                                                <rect class="lot" x="105" y="112" width="21.8" height="37.7" />
                                                                                                                                            </a>
                                                                                                                                            <!--17-->
                                                                                                                                            @if($role == 'admin')
                                                                                                                                            @foreach($lots as $area_id => $lot)
                                                                                                                                            @if($area_id == 'C17')
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
            if ($area_id == 'C17') {
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
                                                                                                                                                        <rect class="lot" x="83.1" y="112" width="21.8" height="37.7" />
                                                                                                                                                    </a>
        </g>
        <g fill="#000000" font-family="sans-serif">
            <text x="42" y="132" style="line-height:1.25" xml:space="preserve" font-size="8.18px">
                <tspan x="42" y="132" stroke-width=".265">Entrance</tspan>
            </text>
            <g font-size="6.34px" stroke-width=".159">
                <text x="45" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="45" y="68" stroke-width=".159">C1</tspan>
                </text>
                <text x="67" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="67" y="68" stroke-width=".159">C2</tspan>
                </text>
                <text x="89" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="89" y="68" stroke-width=".159">C3</tspan>
                </text>
                <text x="109" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="109" y="68" stroke-width=".159">C4</tspan>
                </text>
                <text x="132" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="132" y="68" stroke-width=".159">C5</tspan>
                </text>
                <text x="153" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="153" y="68" stroke-width=".159">C6</tspan>
                </text>
                <text x="175" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="175" y="68" stroke-width=".159">C7</tspan>
                </text>
                <text x="197" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="197" y="68" stroke-width=".159">C8</tspan>
                </text>
                <text x="219" y="68" style="line-height:1.25" xml:space="preserve">
                    <tspan x="219" y="68" stroke-width=".159">C9</tspan>
                </text>
                <text x="240" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="240" y="132" stroke-width=".159">C10</tspan>
                </text>
                <text x="219" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="219" y="132" stroke-width=".159">C11</tspan>
                </text>
                <text x="197" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="197" y="132" stroke-width=".159">C12</tspan>
                </text>
                <text x="175" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="175" y="132" stroke-width=".159">C13</tspan>
                </text>
                <text x="153" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="153" y="132" stroke-width=".159">C14</tspan>
                </text>
                <text x="131" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="131" y="132" stroke-width=".159">C15</tspan>
                </text>
                <text x="109" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="109" y="132" stroke-width=".159">C16</tspan>
                </text>
                <text x="88" y="132" style="line-height:1.25" xml:space="preserve">
                    <tspan x="88" y="132" stroke-width=".159">C17</tspan>
                </text>

            </g>
        </g>
</svg>