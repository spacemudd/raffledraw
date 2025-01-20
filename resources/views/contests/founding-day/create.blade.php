<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>مسابقة يوم التأسيس - شركة المغامرة للترفيه</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    @endif

    <style>
        @font-face {
            font-family: Harir;
            src: url("harir.otf") format("opentype");
        }

        @font-face {
            font-family: Harir;
            font-weight: bold;
            src: url("harir.otf") format("opentype");
        }

        body {
            /*background-color: rgb(107 78 69/1);*/
            background-color: whitesmoke;
            font-family: "Harir", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        select {
            background-position: left 0.5rem center;
        }
        .g-recaptcha {
            margin: 0 auto;
        }
        @media(max-width:400px) {
            .g-recaptcha {
                transform:scale(0.80);
                transform-origin:0 0;
                margin-right: -70px;
            }
        }
    </style>
</head>
<body>
<div class="container mx-auto mt-10">
    <div class="grid grid-cols-12 text-center">
        <div class="col-start-2 col-span-10">


            <h1 class="text-center my-5 text-2xl">🇸🇦✨ مسابقة يوم التأسيس السعودي</h1>

            <div class="flex justify-center mt-5">
                <a href="/"><img src="/adventurksa.png" style="max-height:48px;" alt=""></a>
            </div>
            <p class="text-sm mt-2">شركة عالم المغامرة للترفيه</p>


            {{-- Form --}}
            <form action="{{ route('contests.enter') }}" method="post">
                {{ csrf_field() }}
                <div class="bg-white mt-5 rounded-xl p-10">

                    @if (session()->has('already_entered'))
                        <div class="bg-red-500 p-5 my-5 rounded">
                            عذرا، تم تسجيلك في المسابقة
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="bg-green-600 p-5 rounded my-5 text-white">
                            تم تسجيلك بنجاح
                        </div>
                    @endif


                    <h2 class="text-lime-800"><b>السؤال</b></h2>
                    <p>ما هي الرموز الرئيسية التي تمثلها عناصر شعار يوم التأسيس السعودي؟</p>
                    <h2 class="mt-5 text-lime-800"><b>الإجابة</b></h2>
                    <div class="w-full max-w-sm min-w-[200px] mt-2 mx-auto">
                        <select name="answer" class="text-center bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required>
                            <option selected>اختر الإجابة الصحيحة</option>
                            <option value="1">سيارة، اضاءة، شجرة</option>
                            <option value="2">العلم السعودي، والنخلة، والصقر، والخيل العربية، والسوق</option>
                            <option value="3">ارقام، حروف، علامات ترقيم، اسد</option>
                        </select>

                        @if($errors->has('answer'))
                            <p class="text-red-500 border-red-500 border mt-2 pt-2">يوجد خطأ في هذا الحقل</p>
                        @endif
                    </div>

                    <div class="my-10">
                        <img class="mx-auto" style="max-width:300px;" src="/sa-icons.png" />
                    </div>

                    <h2 class="text-lime-800"><b>بيانات المتقدم</b></h2>
                    <h2 class="mt-5 font-thin"><b>الإسم</b></h2>
                    <div class="w-full max-w-sm min-w-[200px] mt-2 mx-auto">
                        <input name="name" class="text-center w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                               placeholder="" required>
                        @if($errors->has('name'))
                            <p class="text-red-500 border-red-500 border mt-2 pt-2">يوجد خطأ في هذا الحقل</p>
                        @endif
                    </div>

                    <h2 class="mt-5 font-thin"><b>رقم الجوال</b></h2>
                    <div class="w-full max-w-sm min-w-[200px] mt-2 mx-auto">
                        <input name="mobile" class="text-center w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                               placeholder="05XXXXXX" required>
                        @if($errors->has('mobile'))
                            <p class="text-red-500 border-red-500 border mt-2 pt-2">يجب على الرقم ان تكون بدايته 05 وعلى ان يكون 10 ارقام</p>
                        @endif
                    </div>

                    <h2 class="mt-5 font-thin"><b>يوزر الحساب</b></h2>
                    <div class="w-full max-w-sm min-w-[200px] mt-2 mx-auto">
                        <input name="user" class="text-center w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                               placeholder="" required>
                        @if($errors->has('user'))
                            <p class="text-red-500 border-red-500 border mt-2 pt-2">يوجد خطأ في هذا الحقل</p>
                        @endif
                    </div>

                    <div class="flex mt-5 mx-auto">
                        {!! app('captcha')->display() !!}
                    </div>

                    <button class="mt-5 bg-lime-900 hover:bg-lime-950 text-white font-bold py-2 px-4 rounded">
                        ادخل المسابقة
                    </button>
                </div>
            </form>

            <div class="bg-white mt-5 rounded-xl p-5 text-right text-xs">
                <h2 class="text-xl">شروط المسابقة</h2>
                <ul class="mt-5">
                    <li>
                        <strong>الأهلية للمشاركة:</strong>
                        <ul class="list-disc mr-5">
                            <li>يجب أن يكون المشاركون فوق سن (18 سنة).</li>
                            <li>المشاركة مفتوحة فقط للمقيمين في المملكة العربية السعودية.</li>
                            <li>يُمنع موظفو الشركة المنظمة وأفراد أسرهم المباشرين من المشاركة.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>طريقة الاشتراك:</strong>
                        <ul class="list-disc mr-5">
                            <li>يتم الاشتراك في السحب من خلال المشاركة الجواب على السؤال.</li>
                            <li>كل مشارك مؤهل لدخول واحد فقط.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>مدة السحب:</strong>
                        <ul class="list-disc mr-5">
                            <li>يبدأ السحب بتاريخ (01-02-2025) وينتهي بتاريخ (28-02-2025).</li>
                            <li>لن يتم قبول أي مشاركات بعد الموعد النهائي.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>اختيار الفائزين:</strong>
                        <ul class="list-disc mr-5">
                            <li>سيتم اختيار الفائزين عشوائياً باستخدام طريقة شفافة وموثوقة.</li>
                            <li>سيتم الإعلان عن الفائزين بتاريخ (-) من خلال حساباتنا على المواقع الإجتماعية.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>الجوائز:</strong>
                        <ul class="list-disc mr-5">
                            <li>تشمل الجوائز: كوبنات بقيمة 500 ر.س. للاستخدام على متجرنا.</li>
                            <li>الجوائز غير قابلة للتحويل أو الاستبدال بقيمة نقدية.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>التواصل مع الفائزين:</strong>
                        <ul class="list-disc mr-5">
                            <li>سيتم التواصل مع الفائزين عبر الهاتف.</li>
                            <li>إذا لم يتم الرد خلال يوم (1) من تاريخ الإخطار، سيتم اختيار فائز بديل.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>المسؤولية:</strong>
                        <ul class="list-disc mr-5">
                            <li>لا تتحمل الشركة المنظمة أي مسؤولية عن المشاركات المفقودة أو غير المكتملة أو التي تم إرسالها بعد الموعد النهائي.</li>
                            <li>الشركة غير مسؤولة عن أي خسائر أو أضرار تتعلق باستخدام الجوائز.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>تعديلات الشروط:</strong>
                        <ul class="list-disc mr-5">
                            <li>تحتفظ الشركة المنظمة بحق تعديل الشروط أو إلغاء السحب في أي وقت دون إشعار مسبق.</li>
                        </ul>
                    </li>
                    <li class="mt-5">
                        <strong>قبول الشروط:</strong>
                        <ul class="list-disc mr-5">
                            <li>المشاركة في السحب تعني قبول جميع الشروط والأحكام المذكورة أعلاه.</li>
                        </ul>
                    </li>
                </ul>
            </div>


            <div class="text-center justify-center rounded-xl my-5" style="background: url('/header.png');background-position:center;background-size:cover;height:300px;">
            </div>

            <p class=""><a class="text-lime-800 text-xs" href="https://shop.adventurksa.com">الرئيسية</a></p>
            <p class="text-xs text-gray-400 my-5"> شركة عالم المغامرة للترفيه © 2025</p>

        </div>

{{--        <form action="{{ route('raffle.upload') }}" method="post" class="text-center" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <input type="file" name="raffle_file">--}}
{{--            <br/>--}}
{{--            <button class="mt-2 bg-gray-500 rounded px-2 text-white">اختيار</button>--}}
{{--        </form>--}}
    </div>

</div>
</body>
</html>
