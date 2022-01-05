@extends('layouts.app')

@section('cabecera-section')
Listado de empresas
@endsection

@section('content')

<section class="text-gray-600 body-font ">
    <main class="flex flex-col-reverse sm:flex-row jusitfy-between items-center py-6 md:px-12">
        <div class="sm:w-2/5 flex flex-col items-center sm:items-start text-center sm:text-left">
            <h1 class="uppercase text-5xl text-blue-900 font-bold leading-none tracking-wide mb-2">Formación dual</h1>
            <h2 class="uppercase text-3xl text-orange-500 text-secondary tracking-widest mb-6">feria virtual</h2>
            <p class="text-gray-600 leading-relaxed mb-8">Bienvenido a la feria virtual de empresas del Grado en Industria Digital. Si eres estudiante, regístrate y accede a toda la información sobre las empresas. Si eres una empresa, date de alta y elabora tu stand virtual. ¡Bienvenid@s!</p>
            <div>
                <a href="{{ route('login') }}" class="inline-block border bg-green-500 hover:bg-white hover:text-green-500 hover:border-green-500 transition ease-in-out duration-700 py-3 px-6 uppercase text-lg font-bold text-white rounded-full">
                    Acceder
                </a>
                <a href="{{ route('register') }}" class="inline-block border bg-blue-500 hover:bg-white hover:text-blue-500 hover:border-blue-500 transition ease-in-out duration-700 py-3 px-6 uppercase text-lg font-bold text-white rounded-full ml-3">
                    Darme de alta
                </a>
            </div>

        </div>
        <div class="mb-16 sm:mb-0 mt-8 sm:mt-0 sm:w-3/5 sm:pl-12 md:pl-24 md:pr-2">
            <svg class="w-full h-64 sm:h-auto" width="997" height="628.5" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="931" height="633.23506" viewBox="0 0 931 633.23506" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="a2bfc056-849c-4ec6-91e1-f91319e9ec32" data-name="Group 41">
                    <rect id="a3c1d3c4-4e90-4475-ab67-d6aa194b0cda" data-name="Rectangle 62" x="120.36301" y="297.37505" width="703.57599" height="333.85901" fill="#e6e6e6" />
                    <rect id="e222743c-d215-4483-8b06-896263acb449" data-name="Rectangle 75" x="140.48199" y="326.00405" width="663.33899" height="278.54901" fill="#fff" />
                    <rect id="a5e02001-7de0-497e-bd39-9bc4e3f553c3" data-name="Rectangle 76" x="675.71198" y="377.85103" width="17.177" height="17.177" fill="#e6e6e6" />
                    <rect id="a818f6b2-9049-4be6-858a-9eef7b067dda" data-name="Rectangle 77" x="217.543" y="377.85103" width="17.177" height="17.177" fill="#00bfa6" />
                    <rect id="e2dc3e68-3640-4751-a187-2d32846d30c0" data-name="Rectangle 78" x="217.04599" y="427.05306" width="57.258" height="57.258" fill="#e6e6e6" />
                    <rect id="a0ba3db0-8b31-4423-a256-2a0dc53933ae" data-name="Rectangle 80" x="120.063" y="278.08605" width="703.57599" height="29.89" fill="#00bfa6" />
                    <circle id="bb2c25e8-a4f5-477f-938a-ba2f4a6c137d" data-name="Ellipse 90" cx="142.27499" cy="299.66203" r="5.54" fill="#fff" />
                    <circle id="eb283697-d5f2-44f6-a11b-2e5adde2f565" data-name="Ellipse 91" cx="163.303" cy="299.66203" r="5.54" fill="#fff" />
                    <circle id="e7e312b6-8acc-452e-9cd4-4f6349f5007f" data-name="Ellipse 92" cx="184.33199" cy="299.66203" r="5.54" fill="#fff" />
                    <rect id="a0963db8-a572-4a40-8f57-be0fd9c2d8c3" data-name="Rectangle 60" y="631.23506" width="931" height="2" fill="#e6e6e6" />
                    <rect id="b36c2a8e-a9be-4d37-810e-923692d19cdb" data-name="Rectangle 81" x="333.68799" y="432.78005" width="140.28101" height="8.053" fill="#e6e6e6" />
                    <rect id="aa1d26da-49a8-41de-8cb5-b8f8184fe0ae" data-name="Rectangle 82" x="333.68799" y="462.15401" width="216.625" height="8.053" fill="#00bfa6" />
                    <rect id="ac31809e-ecba-4f59-90db-296bd3050334" data-name="Rectangle 83" x="333.68799" y="489.82704" width="176.54401" height="8.053" fill="#e6e6e6" />
                    <rect id="b84288f0-dbbf-4761-bd75-4b898461b36c" data-name="Rectangle 84" x="333.68799" y="517.39803" width="103.064" height="8.053" fill="#e6e6e6" />
                    <rect id="bd93c4e7-cb78-4a87-ab16-23d001bc2737" data-name="Rectangle 85" x="333.68799" y="544.96706" width="155.55" height="8.053" fill="#e6e6e6" />
                    <rect id="bba4eb33-6fa2-4df7-a8d1-83644e8e5d67" data-name="Rectangle 88" x="705.29602" y="377.85103" width="17.177" height="17.177" fill="#e6e6e6" />
                    <rect id="f2a4bb2b-ea4d-4e49-9a1a-d309a808d159" data-name="Rectangle 90" x="734.87903" y="377.85103" width="17.177" height="17.177" fill="#e6e6e6" />
                    <circle id="b03b494e-dda4-489e-89cd-b5d563742355" data-name="Ellipse 88" cx="717.17099" cy="490.56602" r="34.884" fill="#00bfa6" opacity="0.997" style="isolation:isolate" />
                    <circle id="e6d27be5-fed8-4aaf-9e55-a91224dd363a" data-name="Ellipse 97" cx="188.489" cy="55.18403" r="39.273" fill="#2f2e41" />
                    <path id="fe6a134f-9064-47d4-b31c-90708736d4a8-49" data-name="Path 630" d="M225.253,524.59153h-17.2l-8.181-66.326h25.379Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                    <path id="fa849e20-ba67-4278-81ee-d1167b7aa6dc-50" data-name="Path 631" d="M195.775,519.67751h33.163v20.881H174.894a20.881,20.881,0,0,1,20.881-20.881Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                    <path id="a88ec020-2ed6-4a48-814f-7c14aebc27ac-51" data-name="Path 632" d="M198.41,514.99452l-16.406-5.149,12.052-65.735,24.214,7.6Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                    <path id="b4b30a85-97bd-4362-a855-e6f58c99cba3-52" data-name="Path 633" d="M171.746,501.48248l31.64245,9.93009-6.25227,19.923-51.56447-16.18206A20.881,20.881,0,0,1,171.747,501.48278h0Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                    <path id="f42c0410-8a39-47c2-9be6-23f0eea84aff-53" data-name="Path 634" d="M204.005,488.52754a6.25819,6.25819,0,0,1-2.2-.4l-12.655-4.743a6.334,6.334,0,0,1-3.947-7.271c3.185-14.321,14.04-63.077,19.984-89.228,7.049-31.019,109.885-36.783,114.259-37.013l.36-.019,11.56811,14.531c4.18,13.436,2.855,23.916-3.938,31.15-19.823,21.105-79.006,8.009-86.063,6.352l-31.45508,82.577a6.33,6.33,0,0,1-5.91,4.064Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                    <path id="bb9232ec-2887-4985-b220-30c2c46adf62-54" data-name="Path 635" d="M222.239,498.34647a6.25524,6.25524,0,0,1-2.2-.4l-12.651-4.744a6.333,6.333,0,0,1-3.947-7.271c3.185-14.321,14.04-63.077,19.984-89.228,7.049-31.019,109.885-36.783,114.259-37.013l.36-.019,11.564,14.53509c4.18,13.436,2.855,23.916-3.938,31.15-19.822,21.1-79.006,8.009-86.063,6.351l-31.459,82.57391a6.33,6.33,0,0,1-5.91,4.064Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                    <path id="bf752b52-878a-4c47-8a02-c5dd3ca125d0-55" data-name="Path 636" d="M185.638,296.33752a14.79869,14.79869,0,0,1,1.241,1.966l69.178,7.288,9.96-13.65406,22.569,12.335-19.559,33.132-84.841-21.632a14.722,14.722,0,1,1,1.454-19.436Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                    <path id="ae95fee3-8471-4436-bacf-47da3ee4edce-56" data-name="Path 637" d="M346.397,379.7705a6.31418,6.31418,0,0,1-2.875-.7c-13.833-7.034-40.769-19.215-65.747-21.764a6.16111,6.16111,0,0,1-4.342-2.454,6.33787,6.33787,0,0,1-1.169-4.924c2.254-12.477,7.424-44.249,6.758-69.712a34.5,34.5,0,0,1,26.063-34.319h0a112.01431,112.01431,0,0,1,13.9-2.741,34.77894,34.77894,0,0,1,38.655,40.342c-4.454,26.388-8.945,63.244-5.042,88.972a6.32194,6.32194,0,0,1-2.551,6.1A6.21265,6.21265,0,0,1,346.397,379.7705Z" transform="translate(-134.5 -133.38247)" fill="#ccc" />
                    <path id="f8a5325a-7268-4362-a255-60631c9bfca5-57" data-name="Path 638" d="M280.303,312.65247a6.31383,6.31383,0,0,1-2.506-.523l-18.021-7.8a6.31905,6.31905,0,0,1-3.285-8.3l13.93-32.179a16.13,16.13,0,1,1,29.69678,12.602q-.04514.10629-.0918.212l-13.93,32.18A6.328,6.328,0,0,1,280.303,312.65247Z" transform="translate(-134.5 -133.38247)" fill="#ccc" />
                    <circle id="e89a297e-1488-4b62-b167-7800139de88b" data-name="Ellipse 98" cx="187.054" cy="64.37704" r="34.45" fill="#feb8b8" />
                    <path id="bfc7d311-3606-4cd9-8309-fa0ce7944c94-58" data-name="Path 639" d="M286.484,180.83051a124.25543,124.25543,0,0,0,53.757,17.713l-5.667-6.789a41.63834,41.63834,0,0,0,12.863,2.554,14.08706,14.08706,0,0,0,11.483-5.375,13.1,13.1,0,0,0,.877-12.1,24.81648,24.81648,0,0,0-7.807-9.763,46.4819,46.4819,0,0,0-43.263-7.732,27.779,27.779,0,0,0-12.922,8.289c-3.266,4.029-9.553,7.619-7.881,12.528Z" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                    <path id="ec73fef4-50dc-4543-9636-3b24ac170308-59" data-name="Path 640" d="M324.634,151.80952a66.918,66.918,0,0,1,24.345-15.747,34.25283,34.25283,0,0,1,18.443-2.289c6.153,1.238,11.971,5.494,13.688,11.531,1.4,4.936-.046,10.251-2.224,14.9s-5.086,8.956-6.848,13.776a31.441,31.441,0,0,0,31.638,42.163c-6.045.811-11.617,3.652-17.526,5.163s-12.883,1.41-17.274-2.824c-4.646-4.479-4.739-11.761-4.514-18.21l1-28.762c.17-4.889.316-9.935-1.448-14.5s-5.954-8.56-10.846-8.518c-3.708.031-6.989,2.278-9.963,4.493s-6.121,4.578-9.814,4.908-7.91-2.4-7.634-6.1" transform="translate(-134.5 -133.38247)" fill="#2f2e41" />
                    <path id="ba6ab2e4-b23b-4027-ba52-bbc91f9115f8-60" data-name="Path 641" d="M263.635,370.92053a15.435,15.435,0,1,1,5.95-29.685h0a14.84081,14.84081,0,0,1,1.839.932l62.755-28.171,1.763-17.02,27.051-.724-.179,28.335a15.26006,15.26006,0,0,1-11.027,14.509l-73.385,20.885a14.45521,14.45521,0,0,1-.5,1.429,15.49207,15.49207,0,0,1-14.26,9.509Z" transform="translate(-134.5 -133.38247)" fill="#feb8b8" />
                    <path id="b13d6e0f-103e-49e8-b98c-f9f1d84e31ae-61" data-name="Path 642" d="M360.702,310.13648a6.30547,6.30547,0,0,1-2.471.668l-19.6,1.205a6.319,6.319,0,0,1-6.687-5.912l-2.151-35a16.13045,16.13045,0,0,1,32.2-1.981l2.152,35a6.327,6.327,0,0,1-3.441,6.02Z" transform="translate(-134.5 -133.38247)" fill="#ccc" />
                    <rect id="ef169b54-99b1-4807-9c68-842c3cbd65db" data-name="Rectangle 91" x="67.888" y="231.25804" width="120.625" height="9.818" rx="1.778" fill="#3f3d56" />
                    <path id="ba69314c-00f4-451f-ada7-fcdfd2edc53a-62" data-name="Path 643" d="M157.405,365.34254v-68.729a9.128,9.128,0,0,1,9.117-9.117H291.355a9.127,9.127,0,0,1,9.117,9.117v68.729a9.127,9.127,0,0,1-9.117,9.117H166.522A9.128,9.128,0,0,1,157.405,365.34254Z" transform="translate(-134.5 -133.38247)" fill="#3f3d56" />
                    <circle id="bf28e027-707c-49c1-b6c0-ef0059b61f2f" data-name="Ellipse 99" cx="95.94" cy="197.59903" r="8.416" fill="#fff" />
                </g>
            </svg>
        </div>
    </main>
</section>
@endsection