{{--
    Animated hero clip: the AMT coach (drawn side-on, white Yutong-style body with AMT livery)
    on a UK road trip from London to Edinburgh. Pure SVG + CSS; the only image is the AMT logo
    used as the livery. Loops every 36s.

    Timing: the coach faces right, so scenery scrolls LEFT. The landmark strip is 2880 units wide
    and moves at 80 units/s (36s loop). Nine landmarks sit 320 units apart, so a new one reaches the
    front of the coach every 4s. Each caption uses the same 36s cycle with a matching negative delay.
--}}
<div class="london-clip">
    <svg class="london-clip-svg" viewBox="0 0 1600 700" preserveAspectRatio="xMidYMax slice" role="img"
        aria-label="{{ __('Animated illustration of an AMT Coaches coach touring UK landmarks: the London Eye, Big Ben, the ArcelorMittal Orbit, Brighton Beach, Stonehenge, Clifton Suspension Bridge, Blackpool Tower, the Angel of the North and Edinburgh Castle') }}">
        <defs>
            <linearGradient id="lcSky" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#0d1a33" />
                <stop offset="0.45" stop-color="#1F2E4E" />
                <stop offset="0.78" stop-color="#7a4f6d" />
                <stop offset="1" stop-color="#f4a259" />
            </linearGradient>
            <radialGradient id="lcSun" cx="0.5" cy="0.5" r="0.5">
                <stop offset="0" stop-color="#ffe2a3" />
                <stop offset="0.4" stop-color="#ffc56b" stop-opacity="0.9" />
                <stop offset="1" stop-color="#f4a259" stop-opacity="0" />
            </radialGradient>
            <linearGradient id="lcBeam" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0" stop-color="#fff3c4" stop-opacity="0.55" />
                <stop offset="1" stop-color="#fff3c4" stop-opacity="0" />
            </linearGradient>
            <linearGradient id="lcField" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#2c4a45" />
                <stop offset="1" stop-color="#1b2e2c" />
            </linearGradient>
            {{-- Coach paint, glass and wheels --}}
            <linearGradient id="lcPaint" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#ffffff" />
                <stop offset="0.65" stop-color="#eef0f3" />
                <stop offset="1" stop-color="#c9ced5" />
            </linearGradient>
            <linearGradient id="lcGlass" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#2a313b" />
                <stop offset="1" stop-color="#14181e" />
            </linearGradient>
            <radialGradient id="lcRim" cx="0.4" cy="0.35" r="0.7">
                <stop offset="0" stop-color="#f4f6f8" />
                <stop offset="0.7" stop-color="#b9c0c8" />
                <stop offset="1" stop-color="#8a929c" />
            </radialGradient>
            <clipPath id="lcBodyClip">
                <path d="M14 6 H570 Q622 8 636 58 L644 150 Q646 186 624 186 H12 Q2 186 2 172 V22 Q2 6 14 6 Z" />
            </clipPath>
        </defs>

        {{-- Sky and sun --}}
        <rect width="1600" height="700" fill="url(#lcSky)" />
        <circle cx="1220" cy="440" r="150" fill="url(#lcSun)" />
        <circle cx="1220" cy="440" r="46" fill="#ffd98c" opacity="0.9" />

        {{-- Clouds (slow) --}}
        <g class="lc-scroll lc-clouds">
            @foreach ([0, 1600] as $dx)
                <g transform="translate({{ $dx }},0)" fill="#ffffff" opacity="0.10">
                    <ellipse cx="220" cy="150" rx="120" ry="22" />
                    <ellipse cx="290" cy="138" rx="70" ry="20" />
                    <ellipse cx="760" cy="95" rx="150" ry="20" />
                    <ellipse cx="1120" cy="185" rx="110" ry="18" />
                    <ellipse cx="1180" cy="172" rx="60" ry="16" />
                    <ellipse cx="1480" cy="120" rx="90" ry="16" />
                </g>
            @endforeach
        </g>

        {{-- Distant rolling hills (slow parallax) --}}
        <g class="lc-scroll lc-far">
            @foreach ([0, 1600] as $dx)
                <path transform="translate({{ $dx }},0)" fill="#26365a" opacity="0.85"
                    d="M0 470 C120 420 230 430 330 455 C430 480 520 410 650 415 C780 420 840 470 960 462 C1080 455 1150 400 1290 410 C1420 420 1500 470 1600 470 V520 H0 Z" />
                <path transform="translate({{ $dx }},0)" fill="#203250"
                    d="M0 495 C150 470 260 480 380 492 C520 506 640 470 800 474 C960 478 1060 500 1200 494 C1340 488 1460 470 1600 495 V530 H0 Z" />
            @endforeach
        </g>

        {{-- UK landmarks (main parallax layer). Order of arrival: London Eye, Big Ben, Olympic Park, Brighton,
             Stonehenge, Bristol, Blackpool, Gateshead, Edinburgh --}}
        <g class="lc-scroll lc-landmarks">
            @foreach ([0, 2880] as $dx)
                <g transform="translate({{ $dx }},0)" fill="#141f38">

                    {{-- London Eye (centre x 1440) --}}
                    <g>
                        <line x1="1440" y1="362" x2="1385" y2="500" stroke="#141f38" stroke-width="7" />
                        <line x1="1440" y1="362" x2="1495" y2="500" stroke="#141f38" stroke-width="7" />
                        <rect x="1395" y="488" width="90" height="12" />
                        <g class="lc-eye">
                            <circle cx="1440" cy="362" r="122" fill="none" stroke="#141f38" stroke-width="6" />
                            <circle cx="1440" cy="362" r="112" fill="none" stroke="#141f38" stroke-width="2" />
                            @for ($i = 0; $i < 16; $i++)
                                @php
                                    $a = deg2rad($i * 22.5);
                                    $ex = round(1440 + 112 * cos($a), 1);
                                    $ey = round(362 + 112 * sin($a), 1);
                                    $px = round(1440 + 129 * cos($a), 1);
                                    $py = round(362 + 129 * sin($a), 1);
                                @endphp
                                <line x1="1440" y1="362" x2="{{ $ex }}" y2="{{ $ey }}" stroke="#141f38" stroke-width="1.5" />
                                <ellipse cx="{{ $px }}" cy="{{ $py }}" rx="7" ry="5" fill="#ffd98c" opacity="0.85" />
                            @endfor
                            <circle cx="1440" cy="362" r="10" />
                        </g>
                    </g>

                    {{-- ArcelorMittal Orbit, Queen Elizabeth Olympic Park (centre x 2080) --}}
                    <g fill="none" stroke="#b3263a" stroke-width="6" stroke-linecap="round">
                        <path d="M2050 500 C2040 440 2110 420 2095 360 C2080 300 2040 300 2060 250" />
                        <path d="M2110 500 C2125 450 2050 410 2070 350 C2090 290 2115 290 2100 250" />
                        <path d="M2065 500 C2090 470 2120 430 2085 395 C2050 360 2060 320 2090 300" stroke-width="5" />
                        <path d="M2100 500 C2070 465 2040 420 2075 385 C2105 355 2110 320 2075 290" stroke-width="5" />
                        <path d="M2058 250 C2030 230 2050 200 2080 215 C2110 230 2125 205 2105 190" stroke-width="5" />
                        {{-- The slide tube spiralling round the tower --}}
                        <path d="M2120 490 C2150 470 2140 440 2105 445 C2070 450 2030 420 2060 400 C2090 380 2140 380 2128 350" stroke="#8d939c" stroke-width="4" />
                        <ellipse cx="2080" cy="252" rx="38" ry="9" fill="#141f38" stroke="#b3263a" stroke-width="4" />
                        <ellipse cx="2080" cy="270" rx="30" ry="7" fill="#141f38" stroke="#b3263a" stroke-width="3" />
                    </g>
                    <rect x="2040" y="490" width="80" height="10" />

                    {{-- Brighton Beach & Palace Pier (centre x 2400) --}}
                    <g>
                        <rect x="2215" y="468" width="390" height="32" fill="#2e4a7a" />
                        <g stroke="#9fb4d9" stroke-width="2" stroke-linecap="round" opacity="0.45">
                            <line x1="2240" y1="478" x2="2280" y2="478" /><line x1="2330" y1="486" x2="2370" y2="486" />
                            <line x1="2450" y1="476" x2="2500" y2="476" /><line x1="2540" y1="490" x2="2580" y2="490" />
                        </g>
                        {{-- Pier: deck, legs, domed pavilion and helter-skelter --}}
                        <rect x="2300" y="452" width="290" height="6" />
                        @for ($l = 0; $l < 15; $l++)
                            <rect x="{{ 2305 + $l * 19 }}" y="456" width="3" height="20" />
                        @endfor
                        <rect x="2330" y="430" width="70" height="22" />
                        <path d="M2338 430 Q2348 412 2358 430 Z" /><path d="M2372 430 Q2382 412 2392 430 Z" />
                        <rect x="2500" y="420" width="80" height="32" />
                        <path d="M2506 420 Q2540 396 2574 420 Z" />
                        <polygon points="2450,452 2460,408 2470,452" />
                        @for ($b = 0; $b < 14; $b++)
                            <circle cx="{{ 2305 + $b * 21 }}" cy="449" r="1.8" fill="#ffd98c" />
                        @endfor
                        {{-- Shingle beach and beach huts --}}
                        <path d="M2205 500 Q2300 484 2420 490 Q2540 496 2615 500 Z" fill="#c9a66b" opacity="0.85" />
                        @foreach ([[2222, '#DF1C37'], [2248, '#2f7fd1'], [2274, '#f2c94c'], [2300, '#27ae60']] as [$hx, $hc])
                            <rect x="{{ $hx }}" y="474" width="20" height="22" fill="{{ $hc }}" opacity="0.9" />
                            <polygon points="{{ $hx - 2 }},474 {{ $hx + 10 }},464 {{ $hx + 22 }},474" fill="{{ $hc }}" opacity="0.9" />
                            <rect x="{{ $hx + 7 }}" y="484" width="6" height="12" fill="#141f38" opacity="0.6" />
                        @endforeach
                    </g>

                    {{-- Big Ben & Houses of Parliament, London (centre x 1760) --}}
                    <g transform="translate(300,20)">
                        <rect x="1320" y="392" width="160" height="88" />
                        @for ($p = 0; $p < 9; $p++)
                            <rect x="{{ 1324 + $p * 18 }}" y="378" width="6" height="16" />
                            <polygon points="{{ 1323 + $p * 18 }},378 {{ 1327 + $p * 18 }},366 {{ 1331 + $p * 18 }},378" />
                        @endfor
                        <rect x="1478" y="235" width="44" height="245" />
                        <rect x="1472" y="205" width="56" height="52" />
                        <circle cx="1500" cy="231" r="17" fill="#f3d9a4" />
                        <line x1="1500" y1="231" x2="1500" y2="219" stroke="#141f38" stroke-width="2" />
                        <line x1="1500" y1="231" x2="1509" y2="234" stroke="#141f38" stroke-width="2" />
                        <rect x="1476" y="180" width="48" height="25" />
                        <polygon points="1472,180 1500,128 1528,180" />
                        <rect x="1498" y="108" width="4" height="22" />
                        @for ($w = 0; $w < 7; $w++)
                            <rect x="{{ 1332 + $w * 21 }}" y="420" width="6" height="12" fill="#ffd98c" opacity="0.55" />
                        @endfor
                    </g>

                    {{-- Stonehenge, Wiltshire (centre x 2720) --}}
                    <g transform="translate(960,0)">
                        <ellipse cx="1760" cy="500" rx="150" ry="16" fill="#1b2a4a" />
                        @foreach ([[1650, 70], [1690, 82], [1745, 86], [1782, 86], [1835, 80], [1872, 66]] as [$sx, $sh])
                            <rect x="{{ $sx }}" y="{{ 500 - $sh }}" width="22" height="{{ $sh }}" rx="3" />
                        @endforeach
                        <rect x="1686" y="410" width="50" height="12" rx="3" />
                        <rect x="1741" y="406" width="63" height="12" rx="3" />
                        <rect x="1831" y="414" width="47" height="11" rx="3" />
                        <rect x="1710" y="486" width="40" height="14" rx="4" transform="rotate(-8 1730 493)" />
                    </g>

                    {{-- Clifton Suspension Bridge, Bristol (centre x 160) --}}
                    <g transform="translate(-1280,0)">
                        <polygon points="1250,500 1255,415 1300,400 1342,408 1352,500" fill="#1b2a4a" />
                        <polygon points="1530,500 1540,408 1585,398 1635,412 1640,500" fill="#1b2a4a" />
                        <rect x="1328" y="320" width="28" height="90" />
                        <rect x="1531" y="320" width="28" height="90" />
                        <path d="M1334 410 V350 Q1342 336 1350 350 V410 Z" fill="#26365a" />
                        <path d="M1537 410 V350 Q1545 336 1553 350 V410 Z" fill="#26365a" />
                        <rect x="1342" y="392" width="203" height="7" />
                        <path d="M1342 326 Q1443 398 1545 326" fill="none" stroke="#141f38" stroke-width="4" />
                        <path d="M1342 326 Q1300 360 1268 415" fill="none" stroke="#141f38" stroke-width="4" />
                        <path d="M1545 326 Q1590 360 1622 412" fill="none" stroke="#141f38" stroke-width="4" />
                        @for ($h = 1; $h < 10; $h++)
                            @php $hx = 1342 + $h * 20.3; $t = ($hx - 1342) / 203; $hy = 326 + 4 * 36 * $t * (1 - $t); @endphp
                            <line x1="{{ $hx }}" y1="{{ round($hy, 1) }}" x2="{{ $hx }}" y2="392" stroke="#141f38" stroke-width="1.5" />
                        @endfor
                    </g>

                    {{-- Blackpool Tower, Lancashire (centre x 480) --}}
                    <g transform="translate(-640,0)">
                        <rect x="1045" y="430" width="150" height="70" />
                        <polygon points="1088,432 1152,432 1129,205 1111,205" />
                        <polyline points="1093,420 1147,380 1096,345 1143,310 1102,280 1137,250 1106,228" fill="none" stroke="#2b3b61" stroke-width="2" />
                        <polyline points="1147,420 1093,380 1144,345 1097,310 1138,280 1103,250 1134,228" fill="none" stroke="#2b3b61" stroke-width="2" />
                        <rect x="1104" y="190" width="32" height="16" />
                        <polygon points="1108,190 1120,160 1132,190" />
                        <rect x="1119" y="140" width="2" height="22" />
                        <rect x="1121" y="141" width="12" height="7" fill="#DF1C37" />
                        @for ($w = 0; $w < 6; $w++)
                            <rect x="{{ 1056 + $w * 23 }}" y="455" width="9" height="14" fill="#ffd98c" opacity="0.6" />
                        @endfor
                    </g>

                    {{-- Angel of the North, Gateshead (centre x 800) --}}
                    <g>
                        <ellipse cx="800" cy="500" rx="85" ry="14" fill="#1b2a4a" />
                        <polygon points="789,500 794,328 806,328 811,500" />
                        <circle cx="800" cy="316" r="11" />
                        <polygon points="686,336 914,336 910,356 690,356" />
                        @for ($r = 0; $r < 10; $r++)
                            <line x1="{{ 698 + $r * 22 }}" y1="338" x2="{{ 698 + $r * 22 }}" y2="354" stroke="#2b3b61" stroke-width="2" />
                        @endfor
                    </g>

                    {{-- Edinburgh Castle, Scotland (centre x 1120) --}}
                    <g transform="translate(640,0)">
                        <path d="M330 500 L352 452 Q380 410 440 400 L590 392 Q625 402 640 440 L665 500 Z" fill="#1b2a4a" />
                        <rect x="395" y="352" width="220" height="48" />
                        @for ($c = 0; $c < 11; $c++)
                            <rect x="{{ 396 + $c * 20 }}" y="342" width="10" height="10" />
                        @endfor
                        <rect x="415" y="318" width="34" height="34" />
                        <rect x="414" y="310" width="8" height="8" /><rect x="427" y="310" width="8" height="8" /><rect x="441" y="310" width="8" height="8" />
                        <rect x="515" y="296" width="48" height="56" />
                        <rect x="514" y="288" width="9" height="8" /><rect x="534" y="288" width="9" height="8" /><rect x="554" y="288" width="9" height="8" />
                        <rect x="582" y="328" width="24" height="24" />
                        <rect x="538" y="252" width="3" height="36" />
                        <rect x="541" y="252" width="20" height="13" fill="#1F4FA0" />
                        <line x1="541" y1="252" x2="561" y2="265" stroke="#fff" stroke-width="2" />
                        <line x1="561" y1="252" x2="541" y2="265" stroke="#fff" stroke-width="2" />
                        @for ($w = 0; $w < 6; $w++)
                            <rect x="{{ 410 + $w * 34 }}" y="368" width="7" height="12" fill="#ffd98c" opacity="0.55" />
                        @endfor
                    </g>
                </g>
            @endforeach
        </g>

        {{-- Fields and verge --}}
        <rect x="0" y="498" width="1600" height="48" fill="url(#lcField)" />
        <rect x="0" y="540" width="1600" height="24" fill="#3a3f4a" />

        {{-- Street lamps (fast) --}}
        <g class="lc-scroll lc-lamps">
            @foreach ([0, 400, 800, 1200, 1600, 2000] as $dx)
                <g transform="translate({{ $dx }},0)">
                    <rect x="198" y="470" width="5" height="94" fill="#1d222b" />
                    <path d="M200 474 Q200 462 214 462" fill="none" stroke="#1d222b" stroke-width="4" />
                    <circle cx="216" cy="466" r="6" fill="#ffe2a3" />
                    <circle cx="216" cy="466" r="16" fill="#ffe2a3" opacity="0.18" />
                </g>
            @endforeach
        </g>

        {{-- Road --}}
        <rect x="0" y="564" width="1600" height="136" fill="#2a2d34" />
        <rect x="0" y="564" width="1600" height="7" fill="#8d939c" />
        <line class="lc-dashes" x1="0" y1="612" x2="1600" y2="612" stroke="#e9e3c9" stroke-width="5" stroke-dasharray="60 40" />

        {{-- Headlight beam --}}
        <polygon class="lc-beam" points="1112,616 1410,592 1410,688 1112,634" fill="url(#lcBeam)" />

        {{-- AMT coach, side view, facing right. Local units: 644 long, wheels touch the road at y 212 --}}
        <g transform="translate(478,474)">
            <ellipse cx="322" cy="213" rx="322" ry="9" fill="#000" opacity="0.4" />

            <g class="lc-coach-body">
                {{-- Roof air-con pod --}}
                <rect x="150" y="-5" width="300" height="14" rx="6" fill="#eef0f3" stroke="#d3d8de" />
                {{-- Body --}}
                <path d="M14 6 H570 Q622 8 636 58 L644 150 Q646 186 624 186 H12 Q2 186 2 172 V22 Q2 6 14 6 Z" fill="url(#lcPaint)" stroke="#c3c9d0" stroke-width="1.5" />
                {{-- Side windows with the low front sweep --}}
                <path d="M16 22 H546 Q566 22 570 40 L574 128 Q536 130 500 112 Q430 90 250 90 H16 Z" fill="url(#lcGlass)" />
                <g stroke="#323a45" stroke-width="3">
                    <line x1="96" y1="22" x2="96" y2="90" /><line x1="176" y1="22" x2="176" y2="90" />
                    <line x1="256" y1="22" x2="256" y2="90" /><line x1="336" y1="22" x2="336" y2="90" /><line x1="436" y1="22" x2="436" y2="97" />
                    <line x1="512" y1="22" x2="512" y2="116" />
                </g>
                <polygon points="34,24 74,24 44,88 14,88" fill="#ffffff" opacity="0.06" />
                <polygon points="200,24 226,24 196,88 176,88" fill="#ffffff" opacity="0.06" />
                {{-- Silver sweep line under the windows --}}
                <path d="M170 98 Q260 96 430 104 Q500 116 540 134 Q570 146 620 147" fill="none" stroke="#aab1ba" stroke-width="7" stroke-linecap="round" />
                <path d="M170 106 Q260 104 428 112 Q498 124 538 142 Q568 154 620 155" fill="none" stroke="#dfe3e8" stroke-width="2" />
                {{-- Windscreen --}}
                <path d="M562 8 Q620 12 634 58 L641 132 H600 Q588 132 584 120 L578 34 Q576 16 562 8 Z" fill="#0f1318" />
                <path d="M590 18 Q618 26 628 60 L620 60 Q612 34 588 24 Z" fill="#ffffff" opacity="0.12" />
                {{-- Luggage bays and skirt --}}
                <g stroke="#c4cad1" stroke-width="1.5">
                    <line x1="190" y1="128" x2="190" y2="172" /><line x1="290" y1="126" x2="290" y2="172" /><line x1="460" y1="124" x2="460" y2="172" />
                    <line x1="60" y1="172" x2="600" y2="172" />
                </g>
                {{-- Rear engine grille and tail light --}}
                <g stroke="#b7bec6" stroke-width="2">
                    <line x1="20" y1="132" x2="64" y2="132" /><line x1="20" y1="140" x2="64" y2="140" />
                    <line x1="20" y1="148" x2="64" y2="148" /><line x1="20" y1="156" x2="64" y2="156" />
                </g>
                <rect x="2" y="104" width="7" height="44" rx="2" fill="#c8102e" />
                {{-- Front bumper, fog light and headlight --}}
                <rect x="598" y="170" width="46" height="12" rx="4" fill="#2a2f36" />
                <circle cx="630" cy="164" r="3.5" fill="#fff3c4" />
                <path d="M610 142 L643 140 L645 154 L614 156 Z" fill="#dfe7f0" stroke="#9aa3ad" stroke-width="1" />
                <circle class="lc-headlight" cx="636" cy="148" r="11" fill="#fff6d0" />
                {{-- "Rabbit ear" mirror --}}
                <path d="M584 20 Q620 2 652 16 L656 28" fill="none" stroke="#e9ecef" stroke-width="5" stroke-linecap="round" />
                <rect x="649" y="26" width="10" height="32" rx="4" fill="#f2f4f6" stroke="#c3c9d0" />
                {{-- AMT livery (real logo) --}}
                <image href="{{ asset('img/amt-livery-logo.webp') }}" x="268" y="95" width="112" height="86" preserveAspectRatio="xMidYMid meet" />
                {{-- Wheel arches --}}
                <g clip-path="url(#lcBodyClip)" fill="#1b1e23">
                    <circle cx="168" cy="180" r="42" />
                    <circle cx="552" cy="180" r="42" />
                </g>
            </g>

            {{-- Wheels (spin) --}}
            @foreach ([168, 552] as $wx)
                <g transform="translate({{ $wx }},178)">
                    <circle r="34" fill="#16181c" />
                    <g class="lc-wheel">
                        <circle r="30" fill="none" stroke="#25292f" stroke-width="3" />
                        <circle r="21" fill="url(#lcRim)" stroke="#8a929c" stroke-width="1.5" />
                        @for ($s = 0; $s < 5; $s++)
                            <path d="M-3 -19 L3 -19 L2 -11 L-2 -11 Z" fill="#6d7580" transform="rotate({{ $s * 72 }})" />
                        @endfor
                        @for ($n = 0; $n < 8; $n++)
                            <circle cx="{{ round(8 * cos(deg2rad($n * 45)), 2) }}" cy="{{ round(8 * sin(deg2rad($n * 45)), 2) }}" r="1.6" fill="#59616b" />
                        @endfor
                        <circle r="5" fill="#9aa1aa" />
                    </g>
                </g>
            @endforeach
        </g>
    </svg>

    {{-- Caption: same structure and classes as the other hero slides --}}
    <div class="carousel-caption london-clip-caption">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-6 fadeInRight animated animation-style" data-animation="fadeInRight" data-delay="1s">
                    <div class="text-start">
                        <h4 class="text-primary text-uppercase mb-3">{{ __('UK Coach Tours & Day Trips') }}</h4>
                        <h2 class="display-5 text-white">{{ __('Explore UK Landmarks') }} <span class="text-primary">{{ __('by Coach') }}</span></h2>
                        <p class="mb-2">{{ __('From London to Edinburgh, travel in comfort with our professional drivers.') }}</p>
                        <p class="london-clip-ticker mb-4">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>{{ __('Now passing:') }}
                            <span class="london-clip-names">
                                <span style="animation-delay:-34.875s">{{ __('London Eye, London') }}</span>
                                <span style="animation-delay:-30.875s">{{ __('Big Ben, London') }}</span>
                                <span style="animation-delay:-26.875s">{{ __('ArcelorMittal Orbit, Olympic Park') }}</span>
                                <span style="animation-delay:-22.875s">{{ __('Brighton Beach & Palace Pier') }}</span>
                                <span style="animation-delay:-18.875s">{{ __('Stonehenge, Wiltshire') }}</span>
                                <span style="animation-delay:-14.875s">{{ __('Clifton Suspension Bridge, Bristol') }}</span>
                                <span style="animation-delay:-10.875s">{{ __('Blackpool Tower, Lancashire') }}</span>
                                <span style="animation-delay:-6.875s">{{ __('Angel of the North, Gateshead') }}</span>
                                <span style="animation-delay:-2.875s">{{ __('Edinburgh Castle, Scotland') }}</span>
                            </span>
                        </p>
                        <a href="{{ url(app()->getLocale() . '/enquiry') }}" class="btn btn-primary rounded py-3 px-5">{{ __('Plan Your UK Tour') }}</a>
                        <a href="tel:+447564447775" class="london-clip-call ms-3"><i class="fas fa-phone-alt text-primary me-2"></i>+447564447775</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .london-clip { position: relative; height: 700px; overflow: hidden; background: #0d1a33; }
    .london-clip-svg { position: absolute; inset: 0; width: 100%; height: 100%; display: block; }

    /* Scenery scrolls left (the coach faces right) */
    .lc-scroll { animation: lc-scroll-1600 linear infinite; will-change: transform; }
    .lc-clouds { animation-duration: 110s; }
    .lc-far { animation-duration: 40s; }
    .lc-landmarks { animation-name: lc-scroll-2880; animation-duration: 36s; }
    .lc-lamps { animation-name: lc-scroll-400; animation-duration: 2s; }
    @keyframes lc-scroll-1600 { to { transform: translateX(-1600px); } }
    @keyframes lc-scroll-2880 { to { transform: translateX(-2880px); } }

    /* London Eye turns slowly */
    .lc-eye { transform-box: fill-box; transform-origin: center; animation: lc-spin 60s linear infinite; }
    @keyframes lc-scroll-400 { to { transform: translateX(-400px); } }

    .lc-dashes { animation: lc-dash 0.5s linear infinite; }
    @keyframes lc-dash { to { stroke-dashoffset: 100; } }

    /* Wheels: 34 unit radius at 200 units/s is roughly one turn per second */
    .lc-wheel { animation: lc-spin 1s linear infinite; }
    @keyframes lc-spin { to { transform: rotate(360deg); } }

    .lc-coach-body { animation: lc-bounce 0.7s ease-in-out infinite; }
    @keyframes lc-bounce { 50% { transform: translateY(-2px); } }

    /* Headlight: steady glow with a double flash every 4 seconds */
    .lc-headlight, .lc-beam { animation: lc-flash 4s linear infinite; }
    @keyframes lc-flash {
        0%, 80% { opacity: 0.85; }
        83% { opacity: 0.15; }
        86% { opacity: 1; }
        89% { opacity: 0.15; }
        92%, 100% { opacity: 1; }
    }

    /* Caption: inherits the template's .carousel-caption, with a lighter left-to-right fade so the scene shows */
    .carousel-item .london-clip-caption {
        background: linear-gradient(90deg, rgba(0, 12, 33, .85) 0%, rgba(0, 12, 33, .6) 40%, rgba(0, 12, 33, 0) 68%);
        align-items: flex-start;
        padding-top: 50px;
    }
    .london-clip-caption p { color: rgba(255, 255, 255, .85); }
    .london-clip-ticker { font-weight: 700; }
    .london-clip-names { position: relative; display: inline-block; min-width: 290px; height: 1.5em; vertical-align: bottom; }
    .london-clip-names span {
        position: absolute; left: 0; top: 0; white-space: nowrap; color: #fff; opacity: 0;
        animation: lc-caption 36s linear infinite;
    }
    /* Each caption shows for 4s of the 36s loop (11.1%) */
    @keyframes lc-caption {
        0% { opacity: 0; transform: translateY(8px); }
        1.7%, 9.4% { opacity: 1; transform: none; }
        11.1%, 100% { opacity: 0; transform: translateY(-8px); }
    }
    .london-clip-call { color: #fff; font-weight: 700; white-space: nowrap; }
    .london-clip-call:hover { color: var(--bs-primary); }

    /* Keep the slide dots clear of the coach, which drives through the bottom centre */
    .header-carousel .carousel-indicators { left: auto; right: 4%; margin: 0; justify-content: flex-end; }

    @media (max-width: 767.98px) {
        .carousel-item .london-clip-caption { padding-top: 20px; background: linear-gradient(180deg, rgba(0, 12, 33, .8) 0%, rgba(0, 12, 33, 0) 65%); }
        .london-clip-caption h2 { font-size: 1.75rem; }
        /* Shrink the scene into the lower part of the slide so the whole coach fits on a phone */
        .london-clip-svg { top: auto; bottom: 0; height: 60%; }
        .london-clip-caption h4 { font-size: 1rem; }
        .london-clip-names { display: block; min-width: 0; }
        .london-clip-call { display: inline-block; margin: 12px 0 0 !important; }
    }

    @media (prefers-reduced-motion: reduce) {
        .london-clip *, .london-clip-names span { animation: none !important; }
        .london-clip-names span:first-child { opacity: 1; }
    }
</style>
