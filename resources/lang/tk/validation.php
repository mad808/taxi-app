<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':other :value bolanda :attribute kabul edilmelidir.',
    'active_url' => ':attribute dogry URL däl.',
    'after' => ':attribute :date-dan soňky senesi bolmaly.',
    'after_or_equal' => ':attribute :date senesinden soň ýa-da deň bolmaly.',
    'alpha' => ':attribute diňe harpdan ybarat bolmaly.',
    'alpha_dash' => ':attribute diňe harp, san, defis we aşaky çyzyk bolup biler.',
    'alpha_num' => ':attribute diňe harp we san bolup biler.',
    'array' => ':attribute ýygyndy bolmaly.',
    'before' => ':attribute :date-den öňki senesi bolmaly.',
    'before_or_equal' => ':attribute :date senesinden öň ýa-da deň bolmaly.',
    'between' => [
        'numeric' => ':attribute :min we :max arasynda bolmaly.',
        'file' => ':attribute :min we :max kilobaýt arasynda bolmaly.',
        'string' => ':attribute :min we :max harp arasynda bolmaly.',
        'array' => ':attribute :min we :max element arasynda bolmaly.',
    ],
    'boolean' => ':attribute meýdany hakyky ýa-da ýalňyş bolmaly.',
    'confirmed' => ':attribute tassyklamasy gabat gelmeýär.',
    'current_password' => 'Parol nädogry.',
    'date' => ':attribute dogry senesi däl.',
    'date_equals' => ':attribute :date senesine deň bolmaly.',
    'date_format' => ':attribute :format formatyna gabat gelmeýär.',
    'declined' => ':attribute ret edilmeli.',
    'declined_if' => ':other :value bolanda :attribute ret edilmeli.',
    'different' => ':attribute we :other başga-başga bolmaly.',
    'digits' => ':attribute :digits san bolmaly.',
    'digits_between' => ':attribute :min we :max san arasynda bolmaly.',
    'dimensions' => ':attribute nädogry surat ölçeglerine eýe.',
    'distinct' => ':attribute meýdanynda gaýtalanýan baha bar.',
    'email' => ':attribute dogry e-poçta adresi bolmaly.',
    'ends_with' => ':attribute aşakdakylaryň biri bilen gutarmaly: :values.',
    'enum' => 'Saýlanan :attribute nädogry.',
    'exists' => 'Saýlanan :attribute nädogry.',
    'file' => ':attribute faýl bolmaly.',
    'filled' => ':attribute meýdanynyň bahasy bolmaly.',
    'gt' => [
        'numeric' => ':attribute :value-den uly bolmaly.',
        'file' => ':attribute :value kilobaýtdan uly bolmaly.',
        'string' => ':attribute :value harpdan uly bolmaly.',
        'array' => ':attribute :value elementden köp bolmaly.',
    ],
    'gte' => [
        'numeric' => ':attribute :value-den uly ýa-da deň bolmaly.',
        'file' => ':attribute :value kilobaýtdan uly ýa-da deň bolmaly.',
        'string' => ':attribute :value harpdan uly ýa-da deň bolmaly.',
        'array' => ':attribute :value elementden köp ýa-da deň bolmaly.',
    ],
    'image' => ':attribute surat bolmaly.',
    'in' => 'Saýlanan :attribute nädogry.',
    'in_array' => ':attribute meýdany :other-iň içinde ýok.',
    'integer' => ':attribute bitin san bolmaly.',
    'ip' => ':attribute dogry IP adresi bolmaly.',
    'ipv4' => ':attribute dogry IPv4 adresi bolmaly.',
    'ipv6' => ':attribute dogry IPv6 adresi bolmaly.',
    'json' => ':attribute dogry JSON setiri bolmaly.',
    'lt' => [
        'numeric' => ':attribute :value-den kiçi bolmaly.',
        'file' => ':attribute :value kilobaýtdan kiçi bolmaly.',
        'string' => ':attribute :value harpdan kiçi bolmaly.',
        'array' => ':attribute :value elementden az bolmaly.',
    ],
    'lte' => [
        'numeric' => ':attribute :value-den kiçi ýa-da deň bolmaly.',
        'file' => ':attribute :value kilobaýtdan kiçi ýa-da deň bolmaly.',
        'string' => ':attribute :value harpdan kiçi ýa-da deň bolmaly.',
        'array' => ':attribute :value elementden az ýa-da deň bolmaly.',
    ],
    'mac_address' => ':attribute dogry MAC adresi bolmaly.',
    'max' => [
        'numeric' => ':attribute :max-den uly bolmaly däl.',
        'file' => ':attribute :max kilobaýtdan uly bolmaly däl.',
        'string' => ':attribute :max harpdan uly bolmaly däl.',
        'array' => ':attribute :max elementden köp bolmaly däl.',
    ],
    'mimes' => ':attribute :values görnüşinde faýl bolmaly.',
    'mimetypes' => ':attribute :values görnüşinde faýl bolmaly.',
    'min' => [
        'numeric' => ':attribute iň az :min bolmaly.',
        'file' => ':attribute iň az :min kilobaýt bolmaly.',
        'string' => ':attribute iň az :min harp bolmaly.',
        'array' => ':attribute iň az :min element bolmaly.',
    ],
    'multiple_of' => ':attribute :value-e köpeltmek bolmaly.',
    'not_in' => 'Saýlanan :attribute nädogry.',
    'not_regex' => ':attribute formaty nädogry.',
    'numeric' => ':attribute san bolmaly.',
    'password' => 'Parol nädogry.',
    'present' => ':attribute meýdany bolmaly.',
    'prohibited' => ':attribute meýdany gadagan edilendir.',
    'prohibited_if' => ':other :value bolanda :attribute meýdany gadagan edilendir.',
    'prohibited_unless' => ':other :values içinde bolmasa :attribute meýdany gadagan edilendir.',
    'prohibits' => ':attribute meýdany :other-iň bolmagyna ýol bermeýär.',
    'regex' => ':attribute formaty nädogry.',
    'required' => ':attribute meýdany hökmany.',
    'required_array_keys' => ':attribute meýdany :values üçin ýazgylary bolmaly.',
    'required_if' => ':other :value bolanda :attribute meýdany hökmany.',
    'required_unless' => ':other :values içinde bolmasa :attribute meýdany hökmany.',
    'required_with' => ':values bar bolanda :attribute meýdany hökmany.',
    'required_with_all' => ':values ählisi bar bolanda :attribute meýdany hökmany.',
    'required_without' => ':values ýok bolanda :attribute meýdany hökmany.',
    'required_without_all' => ':values hiç biri ýok bolanda :attribute meýdany hökmany.',
    'same' => ':attribute we :other deň bolmaly.',
    'size' => [
        'numeric' => ':attribute :size bolmaly.',
        'file' => ':attribute :size kilobaýt bolmaly.',
        'string' => ':attribute :size harp bolmaly.',
        'array' => ':attribute :size element bolmaly.',
    ],
    'starts_with' => ':attribute aşakdakylaryň biri bilen başlamaly: :values.',
    'string' => ':attribute setir bolmaly.',
    'timezone' => ':attribute dogry wagt zolagy bolmaly.',
    'unique' => ':attribute eýýäm alyndy.',
    'uploaded' => ':attribute ýüklenmedi.',
    'url' => ':attribute dogry URL bolmaly.',
    'uuid' => ':attribute dogry UUID bolmaly.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'ýörite-hat',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];