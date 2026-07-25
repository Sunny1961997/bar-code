@props(['field', 'external' => false, 'iconOnly' => false])

@php
    /*
     |--------------------------------------------------------------------------
     | Global Company Contact Details
     |--------------------------------------------------------------------------
     | Update contact information here only. Public templates consume these
     | values through the <x-company-contact> component.
     */
    $companyContact = [
        'hours' => 'Mon–Sat, 9:00 AM–6:00 PM',
        'primary_phone' => ['label' => '+971 50 962 7076', 'href' => 'tel:+971509627076'],
        'phones' => [
            ['label' => '+971 50 962 7076', 'href' => 'tel:+971509627076'],
            ['label' => '+971 56 295 3927', 'href' => 'tel:+971562953927'],
            ['label' => '+971 58 896 1136', 'href' => 'tel:+971588961136'],
        ],
        'primary_email' => ['label' => 'infoamlshop@gmail.com', 'href' => 'mailto:infoamlshop@gmail.com'],
        'emails' => [
            ['label' => 'infoamlshop@gmail.com', 'href' => 'mailto:infoamlshop@gmail.com'],
            ['label' => 'contact@thegoamlcomplianceservice.com', 'href' => 'mailto:contact@thegoamlcomplianceservice.com'],
            ['label' => 'info@thegoamlcomplianceservice.com', 'href' => 'mailto:info@thegoamlcomplianceservice.com'],
        ],
        'registered_address' => 'B.C. 1300531, Ajman Free Zone C1 Building, Ajman Free Zone, United Arab Emirates',
        'short_address' => 'Ajman Free Zone C1 Building, Ajman, UAE',
        'communication_address' => 'Gold Souk, Al Ras, Deira, Dubai, United Arab Emirates',
        'whatsapp' => ['label' => 'Chat on WhatsApp', 'href' => 'https://wa.me/971509627076'],
        'facebook' => ['label' => 'Visit our Facebook page', 'href' => 'https://www.facebook.com/profile.php?id=61567133731825'],
        'linkedin' => ['label' => 'Visit our LinkedIn page', 'href' => 'https://www.linkedin.com/company/goaml-consultancy/'],
    ];

    $value = $companyContact[$field] ?? null;
@endphp

@if (is_array($value) && array_is_list($value))
    @foreach ($value as $item)
        <a href="{{ $item['href'] }}" {{ $attributes }}>{{ $item['label'] }}</a>@unless($loop->last)<br>@endunless
    @endforeach
@elseif (is_array($value))
    <a href="{{ $value['href'] }}" @if($external) target="_blank" rel="noopener noreferrer" @endif {{ $attributes->merge(['aria-label' => $value['label']]) }}>
        @if (trim((string) $slot) !== ''){{ $slot }}@endif
        @unless($iconOnly){{ $value['label'] }}@endunless
    </a>
@elseif ($value)
    <span {{ $attributes }}>{{ $value }}</span>
@endif
