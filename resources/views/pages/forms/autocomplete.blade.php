@extends ('layouts.app')

@section('content')
<!-- START: forms/autocomplete -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Autocomplete</strong>
      <a
        href="http://www.runningcoder.org/jquerytypeahead/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Default</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.runningcoder.org/jquerytypeahead/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-group">
            <label for="example1">Countries</label>
            <!-- Typeahead Container -->
            <div class="typeahead__container">
              <div class="typeahead__field">
                <div class="typeahead__query">
                  <div class="input-group">
                    <input id="example1" class="form-control" type="text" placeholder="" />
                    <div class="input-group-append">
                      <a href="javascript: void(0);" class="btn btn-default btn-sm">
                        Find Shop
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Typeahead Container -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: forms/autocomplete -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      var countries = [
        'Afghanistan',
        'Albania',
        'Algeria',
        'Andorra',
        'Angola',
        'Antigua and Barbuda',
        'Argentina',
        'Armenia',
        'Australia',
        'Austria',
        'Azerbaijan',
        'Bahamas',
        'Bahrain',
        'Bangladesh',
        'Barbados',
        'Belarus',
        'Belgium',
        'Belize',
        'Benin',
        'Bermuda',
        'Bhutan',
        'Bolivia',
        'Bosnia and Herzegovina',
        'Botswana',
        'Brazil',
        'Brunei',
        'Bulgaria',
        'Burkina Faso',
        'Burma',
        'Burundi',
        'Cambodia',
        'Cameroon',
        'Canada',
        'Cape Verde',
        'Central African Republic',
        'Chad',
        'Chile',
        'China',
        'Colombia',
        'Comoros',
        'Congo, Democratic Republic',
        'Congo, Republic of the',
        'Costa Rica',
        "Cote d'Ivoire",
        'Croatia',
        'Cuba',
        'Cyprus',
        'Czech Republic',
        'Denmark',
        'Djibouti',
        'Dominica',
        'Dominican Republic',
        'East Timor',
        'Ecuador',
        'Egypt',
        'El Salvador',
        'Equatorial Guinea',
        'Eritrea',
        'Estonia',
        'Ethiopia',
        'Fiji',
        'Finland',
        'France',
        'Gabon',
        'Gambia',
        'Georgia',
        'Germany',
        'Ghana',
        'Greece',
        'Greenland',
        'Grenada',
        'Guatemala',
        'Guinea',
        'Guinea-Bissau',
        'Guyana',
        'Haiti',
        'Honduras',
        'Hong Kong',
        'Hungary',
        'Iceland',
        'India',
        'Indonesia',
        'Iran',
        'Iraq',
        'Ireland',
        'Israel',
        'Italy',
        'Jamaica',
        'Japan',
        'Jordan',
        'Kazakhstan',
        'Kenya',
        'Kiribati',
        'Korea, North',
        'Korea, South',
        'Kuwait',
        'Kyrgyzstan',
        'Laos',
        'Latvia',
        'Lebanon',
        'Lesotho',
        'Liberia',
        'Libya',
        'Liechtenstein',
        'Lithuania',
        'Luxembourg',
        'Macedonia',
        'Madagascar',
        'Malawi',
        'Malaysia',
        'Maldives',
        'Mali',
        'Malta',
        'Marshall Islands',
        'Mauritania',
        'Mauritius',
        'Mexico',
        'Micronesia',
        'Moldova',
        'Mongolia',
        'Morocco',
        'Monaco',
        'Mozambique',
        'Namibia',
        'Nauru',
        'Nepal',
        'Netherlands',
        'New Zealand',
        'Nicaragua',
        'Niger',
        'Nigeria',
        'Norway',
        'Oman',
        'Pakistan',
        'Panama',
        'Papua New Guinea',
        'Paraguay',
        'Peru',
        'Philippines',
        'Poland',
        'Portugal',
        'Qatar',
        'Romania',
        'Russia',
        'Rwanda',
        'Samoa',
        'San Marino',
        'Sao Tome',
        'Saudi Arabia',
        'Senegal',
        'Serbia and Montenegro',
        'Seychelles',
        'Sierra Leone',
        'Singapore',
        'Slovakia',
        'Slovenia',
        'Solomon Islands',
        'Somalia',
        'South Africa',
        'Spain',
        'Sri Lanka',
        'Sudan',
        'Suriname',
        'Swaziland',
        'Sweden',
        'Switzerland',
        'Syria',
        'Taiwan',
        'Tajikistan',
        'Tanzania',
        'Thailand',
        'Togo',
        'Tonga',
        'Trinidad and Tobago',
        'Tunisia',
        'Turkey',
        'Turkmenistan',
        'Uganda',
        'Ukraine',
        'United Arab Emirates',
        'United Kingdom',
        'United States',
        'Uruguay',
        'Uzbekistan',
        'Vanuatu',
        'Venezuela',
        'Vietnam',
        'Yemen',
        'Zambia',
        'Zimbabwe',
      ]

      $.typeahead({
        input: '#example1',
        order: 'asc',
        minLength: 1,
        source: {
          data: countries,
        },
        cancelButton: false,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection