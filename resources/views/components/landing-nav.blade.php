<div class="static w-full">
    @push('scripts')
        <script>
            var selectedProgram = null;
            const route = "{{ route('detail', ['slug' => ':any1', 'course' => ':any2']) }}";

            function toggleModal() {
                document.getElementById('modal-program').classList.toggle("hidden");
            }

            function showModal(program) {
                selectedProgram = program
                document.getElementById('course_title').innerHTML = program
                document.getElementById('course_subtitle').innerHTML = program
                toggleModal()
            }

            function redirectToPage(selectedLocation) {
                location.href = route.replaceAll(':any1', selectedLocation).replaceAll(':any2', selectedProgram)
            }
        </script>
    @endpush
    <div class="relative z-50 hidden" id="modal-program" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-50 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="flex flex-grow flex-row justify-between items-start">
                            <p class="font-black text-xl">Where would you like to learn <span id="course_title"
                                    class="capitalize"></span> Bootcamp?</p>
                            <button class="cursor-pointer m-3 mt-1.5" onclick="toggleModal()">
                                <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.12097 1.09305C1.51085 0.702389 2.14298 0.702389 2.53286 1.09305L14.9076 13.4924C15.2975 13.883 15.2975 14.5164 14.9076 14.9071C14.5177 15.2977 13.8856 15.2977 13.4957 14.9071L1.12097 2.50774C0.731092 2.11708 0.731092 1.4837 1.12097 1.09305Z"
                                        fill="#838383" />
                                    <path
                                        d="M1.0924 14.9071C0.702518 14.5164 0.702517 13.883 1.0924 13.4924L13.4671 1.09304C13.857 0.702384 14.4891 0.702385 14.879 1.09304C15.2689 1.4837 15.2689 2.11708 14.879 2.50773L2.50428 14.9071C2.1144 15.2977 1.48228 15.2977 1.0924 14.9071Z"
                                        fill="#838383" />
                                </svg>
                            </button>
                        </div>
                        <p class="font-medium text-sm text-[#646464] mt-2">You can choose to learn <span
                                id="course_subtitle" class=""></span> in over
                            3 country ready or online. Find now your learning destination!</p>
                        <hr class="my-5">
                        <div class="flex flex-wrap">
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('online')">
                                <img src="{{ Vite::asset('resources/image/ilustration/online.png') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Online</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('indonesia')">
                                <img src="{{ Vite::asset('resources/image/ilustration/indonesia.png') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Indonesia</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('istanbul')">
                                <img src="{{ Vite::asset('resources/image/ilustration/istanbul.png') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Istanbul</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-sm m-2 cursor-pointer"
                                onclick="redirectToPage('Tokyo')">
                                <img src="{{ Vite::asset('resources/image/ilustration/tokyo.jpg') }}" alt="online"
                                    class="h-24 w-24 rounded-lg">
                                <p class="font-bold text-sm text-[#262626] px-2 py-3">Tokyo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        @php
            $url = request()->url();
            $current = explode('/', $url);
            $current = $current[count($current) - 1];
            $current = urldecode($current);
            $color = '#FFD770';
            if ($current == 'data science') {
                $color = '#0F5B89';
            }
        @endphp
        <svg class="absolute right-0 h-96 w-96" viewBox="0 0 603 556" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.3" filter="url(#filter0_f_33_301)">
                <circle cx="427.5" cy="128.5" r="193.5" fill="{{ $color }}" />
            </g>
            <defs>
                <filter id="filter0_f_33_301" x="0" y="-299" width="855" height="855"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="117" result="effect1_foregroundBlur_33_301" />
                </filter>
            </defs>
        </svg>
    </div>
    <nav class="bg-transparent w-10/12 mx-auto">
        <div class="mx-auto">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                        Icon when menu is closed.
            
                        Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                        Icon when menu is open.
            
                        Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <a href="{{ route('landing') }}" class="flex flex-shrink-0 items-center">
                        <svg class="block h-8 w-auto lg:hidden" width="200" height="34" viewBox="0 0 200 34"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_43_3841)">
                                <path
                                    d="M27.7694 0C20.8627 0 15.2207 5.3045 14.815 11.9986C12.7165 10.5622 10.1672 9.71957 7.41501 9.71957H0V19.752C0 25.293 4.5652 29.7845 10.1972 29.7845H12.0979V24.2829H10.1697C7.62036 24.2829 5.55187 22.2503 5.55187 19.7397V15.1965H7.48263C11.5169 15.1965 14.7875 18.4142 14.7875 22.3833V34H20.3919V12.6638C20.3919 8.69464 23.6624 5.47696 27.6967 5.47696H29.6275V10.0201C29.6275 12.5283 27.5615 14.5633 25.0097 14.5633H23.0814V20.0649H24.9822C30.6142 20.0649 35.1794 15.5735 35.1794 10.0325V0H27.7644H27.7694Z"
                                    fill="#FF9E16" />
                                <path d="M128.304 26.3797H139.263V29.521H124.931V4.53345H128.304V26.3797Z"
                                    fill="#00263D" />
                                <path
                                    d="M156.604 11.671H159.762V29.5185H156.604V26.4486C155.032 28.804 152.745 29.9817 149.748 29.9817C147.208 29.9817 145.042 29.0725 143.254 27.2518C141.464 25.4311 140.57 23.2113 140.57 20.5947C140.57 17.9782 141.464 15.7583 143.254 13.9376C145.045 12.1169 147.208 11.2078 149.748 11.2078C152.748 11.2078 155.032 12.3855 156.604 14.7408V11.671ZM150.146 26.9857C151.984 26.9857 153.519 26.3723 154.754 25.1478C155.988 23.9233 156.604 22.4056 156.604 20.5972C156.604 18.7888 155.988 17.2711 154.754 16.0466C153.519 14.8221 151.984 14.2086 150.146 14.2086C148.308 14.2086 146.808 14.8221 145.573 16.0466C144.339 17.2736 143.723 18.7888 143.723 20.5972C143.723 22.4056 144.339 23.9233 145.573 25.1478C146.808 26.3747 148.33 26.9857 150.146 26.9857Z"
                                    fill="#00263D" />
                                <path
                                    d="M174.565 11.2078C177.104 11.2078 179.27 12.1169 181.061 13.9377C182.851 15.7584 183.745 17.9783 183.745 20.5948C183.745 23.2113 182.851 25.4311 181.061 27.2519C179.27 29.0726 177.106 29.9817 174.565 29.9817C171.565 29.9817 169.278 28.804 167.708 26.4487V29.5185H164.55V4.53101H167.708V14.7409C169.281 12.3855 171.567 11.2078 174.565 11.2078ZM174.166 26.9858C175.979 26.9858 177.505 26.3723 178.739 25.1478C179.974 23.9233 180.59 22.4056 180.59 20.5972C180.59 18.7888 179.974 17.2711 178.739 16.0467C177.505 14.8222 175.982 14.2087 174.166 14.2087C172.351 14.2087 170.793 14.8222 169.559 16.0467C168.324 17.2736 167.708 18.7888 167.708 20.5972C167.708 22.4056 168.324 23.9233 169.559 25.1478C170.793 26.3748 172.328 26.9858 174.166 26.9858Z"
                                    fill="#00263D" />
                                <path
                                    d="M189.84 16.4384C189.84 17.1135 190.196 17.6555 190.91 18.062C191.621 18.4685 192.472 18.8159 193.456 19.0993C194.441 19.3851 195.432 19.6709 196.432 19.9591C197.428 20.2474 198.272 20.7869 198.963 21.5803C199.654 22.3711 200 23.3887 200 24.6304C200 26.2491 199.364 27.5451 198.094 28.5207C196.825 29.4964 195.197 29.9842 193.214 29.9842C191.448 29.9842 189.936 29.6023 188.678 28.841C187.421 28.0797 186.525 27.0695 185.994 25.8056L188.716 24.2707C189.006 25.1281 189.55 25.8056 190.349 26.3058C191.148 26.8059 192.102 27.0548 193.216 27.0548C194.255 27.0548 195.114 26.8601 195.793 26.4659C196.469 26.0742 196.81 25.4632 196.81 24.6304C196.81 23.9406 196.459 23.3887 195.755 22.9723C195.052 22.5559 194.208 22.2036 193.224 21.9129C192.237 21.6222 191.245 21.329 190.249 21.0333C189.252 20.7401 188.403 20.2104 187.702 19.4491C187.001 18.6878 186.65 17.7122 186.65 16.5222C186.65 14.9749 187.261 13.7011 188.483 12.7033C189.705 11.703 191.235 11.2029 193.073 11.2029C194.548 11.2029 195.861 11.5306 197.01 12.1835C198.159 12.8388 199.023 13.748 199.604 14.9133L196.955 16.3768C196.301 14.8542 195.007 14.0929 193.073 14.0929C192.179 14.0929 191.416 14.2974 190.787 14.7039C190.158 15.1104 189.843 15.6869 189.843 16.431L189.84 16.4384Z"
                                    fill="#00263D" />
                                <path
                                    d="M66.0565 17.0149C66.0565 20.4395 64.8595 23.4009 62.468 25.8967L65.2577 28.6512L62.9363 30.7208L60.0439 27.8554C57.8502 29.2672 55.4636 29.9718 52.8843 29.9718C49.2557 29.9718 46.1604 28.7104 43.5961 26.1875C41.0318 23.6646 39.7496 20.607 39.7496 17.0124C39.7496 13.4178 41.0318 10.3602 43.5961 7.83732C46.1604 5.31442 49.2557 4.05298 52.8843 4.05298C56.5129 4.05298 59.6157 5.31442 62.19 7.83732C64.7668 10.3602 66.054 13.4178 66.054 17.0124L66.0565 17.0149ZM52.8943 26.7246C54.6373 26.7246 56.2349 26.3254 57.6899 25.5247L52.5963 20.4789L54.9177 18.4438L60.139 23.5981C61.8344 21.7847 62.6833 19.592 62.6833 17.0149C62.6833 14.2776 61.7342 11.9691 59.836 10.0892C57.9378 8.20936 55.6214 7.26819 52.8868 7.26819C50.1522 7.26819 47.8383 8.20936 45.9376 10.0892C44.0394 11.9691 43.0903 14.2776 43.0903 17.0149C43.0903 19.7521 44.0394 22.0237 45.9426 23.9036C47.8433 25.7834 50.1622 26.7246 52.8968 26.7246H52.8943Z"
                                    fill="#00263D" />
                                <path
                                    d="M84.996 11.6609H88.1538V29.5085H84.996V26.4386C83.4233 28.794 81.137 29.9717 78.1394 29.9717C75.6001 29.9717 73.434 29.0625 71.6435 27.2418C69.8529 25.4211 68.9589 23.2012 68.9589 20.5847C68.9589 17.9682 69.8529 15.7483 71.6435 13.9276C73.434 12.1069 75.5976 11.1978 78.1394 11.1978C81.1395 11.1978 83.4233 12.3754 84.996 14.7308V11.6609ZM78.5376 26.9757C80.3757 26.9757 81.9108 26.3623 83.1454 25.1378C84.3799 23.9133 84.996 22.3956 84.996 20.5872C84.996 18.7788 84.3799 17.2611 83.1454 16.0366C81.9108 14.8121 80.3757 14.1986 78.5376 14.1986C76.6995 14.1986 75.1995 14.8121 73.9649 16.0366C72.7303 17.2635 72.1142 18.7788 72.1142 20.5872C72.1142 22.3956 72.7303 23.9133 73.9649 25.1378C75.1995 26.3647 76.722 26.9757 78.5376 26.9757Z"
                                    fill="#00263D" />
                                <path
                                    d="M96.0997 14.6595C97.139 12.4471 99.0272 11.3408 101.759 11.3408V14.5905C100.212 14.5191 98.8794 14.9231 97.7675 15.8052C96.6557 16.6847 96.0997 18.1014 96.0997 20.0527V29.5136H92.9419V11.666H96.0997V14.6644V14.6595Z"
                                    fill="#00263D" />
                                <path d="M108 11.6611H104.842V29.5087H108V11.6611Z" fill="#00263D" />
                                <path
                                    d="M115.981 14.6595C117.02 12.4471 118.908 11.3408 121.64 11.3408V14.5905C120.093 14.5191 118.76 14.9231 117.649 15.8052C116.537 16.6847 115.981 18.1014 115.981 20.0527V29.5136H112.823V11.666H115.981V14.6644V14.6595Z"
                                    fill="#00263D" />
                                <path
                                    d="M107.486 3.27686H110.131V5.8786C110.131 7.31498 108.946 8.48034 107.486 8.48034H104.842V5.8786C104.842 4.44222 106.026 3.27686 107.486 3.27686Z"
                                    fill="#FF9E16" />
                            </g>
                            <defs>
                                <clipPath id="clip0_43_3841">
                                    <rect width="200" height="34" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="hidden h-8 w-auto lg:block" width="200" height="34" viewBox="0 0 200 34"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_43_3841)">
                                <path
                                    d="M27.7694 0C20.8627 0 15.2207 5.3045 14.815 11.9986C12.7165 10.5622 10.1672 9.71957 7.41501 9.71957H0V19.752C0 25.293 4.5652 29.7845 10.1972 29.7845H12.0979V24.2829H10.1697C7.62036 24.2829 5.55187 22.2503 5.55187 19.7397V15.1965H7.48263C11.5169 15.1965 14.7875 18.4142 14.7875 22.3833V34H20.3919V12.6638C20.3919 8.69464 23.6624 5.47696 27.6967 5.47696H29.6275V10.0201C29.6275 12.5283 27.5615 14.5633 25.0097 14.5633H23.0814V20.0649H24.9822C30.6142 20.0649 35.1794 15.5735 35.1794 10.0325V0H27.7644H27.7694Z"
                                    fill="#FF9E16" />
                                <path d="M128.304 26.3797H139.263V29.521H124.931V4.53345H128.304V26.3797Z"
                                    fill="#00263D" />
                                <path
                                    d="M156.604 11.671H159.762V29.5185H156.604V26.4486C155.032 28.804 152.745 29.9817 149.748 29.9817C147.208 29.9817 145.042 29.0725 143.254 27.2518C141.464 25.4311 140.57 23.2113 140.57 20.5947C140.57 17.9782 141.464 15.7583 143.254 13.9376C145.045 12.1169 147.208 11.2078 149.748 11.2078C152.748 11.2078 155.032 12.3855 156.604 14.7408V11.671ZM150.146 26.9857C151.984 26.9857 153.519 26.3723 154.754 25.1478C155.988 23.9233 156.604 22.4056 156.604 20.5972C156.604 18.7888 155.988 17.2711 154.754 16.0466C153.519 14.8221 151.984 14.2086 150.146 14.2086C148.308 14.2086 146.808 14.8221 145.573 16.0466C144.339 17.2736 143.723 18.7888 143.723 20.5972C143.723 22.4056 144.339 23.9233 145.573 25.1478C146.808 26.3747 148.33 26.9857 150.146 26.9857Z"
                                    fill="#00263D" />
                                <path
                                    d="M174.565 11.2078C177.104 11.2078 179.27 12.1169 181.061 13.9377C182.851 15.7584 183.745 17.9783 183.745 20.5948C183.745 23.2113 182.851 25.4311 181.061 27.2519C179.27 29.0726 177.106 29.9817 174.565 29.9817C171.565 29.9817 169.278 28.804 167.708 26.4487V29.5185H164.55V4.53101H167.708V14.7409C169.281 12.3855 171.567 11.2078 174.565 11.2078ZM174.166 26.9858C175.979 26.9858 177.505 26.3723 178.739 25.1478C179.974 23.9233 180.59 22.4056 180.59 20.5972C180.59 18.7888 179.974 17.2711 178.739 16.0467C177.505 14.8222 175.982 14.2087 174.166 14.2087C172.351 14.2087 170.793 14.8222 169.559 16.0467C168.324 17.2736 167.708 18.7888 167.708 20.5972C167.708 22.4056 168.324 23.9233 169.559 25.1478C170.793 26.3748 172.328 26.9858 174.166 26.9858Z"
                                    fill="#00263D" />
                                <path
                                    d="M189.84 16.4384C189.84 17.1135 190.196 17.6555 190.91 18.062C191.621 18.4685 192.472 18.8159 193.456 19.0993C194.441 19.3851 195.432 19.6709 196.432 19.9591C197.428 20.2474 198.272 20.7869 198.963 21.5803C199.654 22.3711 200 23.3887 200 24.6304C200 26.2491 199.364 27.5451 198.094 28.5207C196.825 29.4964 195.197 29.9842 193.214 29.9842C191.448 29.9842 189.936 29.6023 188.678 28.841C187.421 28.0797 186.525 27.0695 185.994 25.8056L188.716 24.2707C189.006 25.1281 189.55 25.8056 190.349 26.3058C191.148 26.8059 192.102 27.0548 193.216 27.0548C194.255 27.0548 195.114 26.8601 195.793 26.4659C196.469 26.0742 196.81 25.4632 196.81 24.6304C196.81 23.9406 196.459 23.3887 195.755 22.9723C195.052 22.5559 194.208 22.2036 193.224 21.9129C192.237 21.6222 191.245 21.329 190.249 21.0333C189.252 20.7401 188.403 20.2104 187.702 19.4491C187.001 18.6878 186.65 17.7122 186.65 16.5222C186.65 14.9749 187.261 13.7011 188.483 12.7033C189.705 11.703 191.235 11.2029 193.073 11.2029C194.548 11.2029 195.861 11.5306 197.01 12.1835C198.159 12.8388 199.023 13.748 199.604 14.9133L196.955 16.3768C196.301 14.8542 195.007 14.0929 193.073 14.0929C192.179 14.0929 191.416 14.2974 190.787 14.7039C190.158 15.1104 189.843 15.6869 189.843 16.431L189.84 16.4384Z"
                                    fill="#00263D" />
                                <path
                                    d="M66.0565 17.0149C66.0565 20.4395 64.8595 23.4009 62.468 25.8967L65.2577 28.6512L62.9363 30.7208L60.0439 27.8554C57.8502 29.2672 55.4636 29.9718 52.8843 29.9718C49.2557 29.9718 46.1604 28.7104 43.5961 26.1875C41.0318 23.6646 39.7496 20.607 39.7496 17.0124C39.7496 13.4178 41.0318 10.3602 43.5961 7.83732C46.1604 5.31442 49.2557 4.05298 52.8843 4.05298C56.5129 4.05298 59.6157 5.31442 62.19 7.83732C64.7668 10.3602 66.054 13.4178 66.054 17.0124L66.0565 17.0149ZM52.8943 26.7246C54.6373 26.7246 56.2349 26.3254 57.6899 25.5247L52.5963 20.4789L54.9177 18.4438L60.139 23.5981C61.8344 21.7847 62.6833 19.592 62.6833 17.0149C62.6833 14.2776 61.7342 11.9691 59.836 10.0892C57.9378 8.20936 55.6214 7.26819 52.8868 7.26819C50.1522 7.26819 47.8383 8.20936 45.9376 10.0892C44.0394 11.9691 43.0903 14.2776 43.0903 17.0149C43.0903 19.7521 44.0394 22.0237 45.9426 23.9036C47.8433 25.7834 50.1622 26.7246 52.8968 26.7246H52.8943Z"
                                    fill="#00263D" />
                                <path
                                    d="M84.996 11.6609H88.1538V29.5085H84.996V26.4386C83.4233 28.794 81.137 29.9717 78.1394 29.9717C75.6001 29.9717 73.434 29.0625 71.6435 27.2418C69.8529 25.4211 68.9589 23.2012 68.9589 20.5847C68.9589 17.9682 69.8529 15.7483 71.6435 13.9276C73.434 12.1069 75.5976 11.1978 78.1394 11.1978C81.1395 11.1978 83.4233 12.3754 84.996 14.7308V11.6609ZM78.5376 26.9757C80.3757 26.9757 81.9108 26.3623 83.1454 25.1378C84.3799 23.9133 84.996 22.3956 84.996 20.5872C84.996 18.7788 84.3799 17.2611 83.1454 16.0366C81.9108 14.8121 80.3757 14.1986 78.5376 14.1986C76.6995 14.1986 75.1995 14.8121 73.9649 16.0366C72.7303 17.2635 72.1142 18.7788 72.1142 20.5872C72.1142 22.3956 72.7303 23.9133 73.9649 25.1378C75.1995 26.3647 76.722 26.9757 78.5376 26.9757Z"
                                    fill="#00263D" />
                                <path
                                    d="M96.0997 14.6595C97.139 12.4471 99.0272 11.3408 101.759 11.3408V14.5905C100.212 14.5191 98.8794 14.9231 97.7675 15.8052C96.6557 16.6847 96.0997 18.1014 96.0997 20.0527V29.5136H92.9419V11.666H96.0997V14.6644V14.6595Z"
                                    fill="#00263D" />
                                <path d="M108 11.6611H104.842V29.5087H108V11.6611Z" fill="#00263D" />
                                <path
                                    d="M115.981 14.6595C117.02 12.4471 118.908 11.3408 121.64 11.3408V14.5905C120.093 14.5191 118.76 14.9231 117.649 15.8052C116.537 16.6847 115.981 18.1014 115.981 20.0527V29.5136H112.823V11.666H115.981V14.6644V14.6595Z"
                                    fill="#00263D" />
                                <path
                                    d="M107.486 3.27686H110.131V5.8786C110.131 7.31498 108.946 8.48034 107.486 8.48034H104.842V5.8786C104.842 4.44222 106.026 3.27686 107.486 3.27686Z"
                                    fill="#FF9E16" />
                            </g>
                            <defs>
                                <clipPath id="clip0_43_3841">
                                    <rect width="200" height="34" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <div class="relative">
                                <div class="flex flex-row items-center cursor-pointer dropdown-menu"
                                    onclick="toggleProgramMenu()">
                                    <button class="text-black  px-3 py-2 font-medium">Programs</button>
                                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.30001 4.3L0.700012 1.7C0.383345 1.38333 0.312679 1.021 0.488012 0.613C0.663345 0.205 0.975679 0.000666667 1.42501 0H6.57501C7.02501 0 7.33768 0.204333 7.51301 0.613C7.68835 1.02167 7.61735 1.384 7.30001 1.7L4.70001 4.3C4.60001 4.4 4.49168 4.475 4.37501 4.525C4.25835 4.575 4.13335 4.6 4.00001 4.6C3.86668 4.6 3.74168 4.575 3.62501 4.525C3.50835 4.475 3.40001 4.4 3.30001 4.3Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <script>
                                    function toggleProgramMenu() {
                                        closeAll()
                                        document.getElementById('program-menu').classList.toggle("hidden");
                                    }
                                </script>
                                <div id="program-menu" class="relative hidden dropdown-menu-child">
                                    <div class="absolute w-full overflow-hidden inline-block -mt-3 pl-6">
                                        <div
                                            class=" h-8 w-8 bg-white rotate-45 transform origin-bottom-left ring-1 ring-black ring-opacity-5">
                                        </div>
                                    </div>
                                    <div class="absolute right-0 z-10 mt-5 w-96 origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="#" onclick="showModal('data science')"
                                            class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-0">
                                            <div class="inline-flex items-center">
                                                <img src="{{ Vite::asset('resources/image/ilustration/ilustration_6.png') }}"
                                                    alt="ilustration 6" class="w-10 h-10">
                                                <p class="font-bold text-sm text-[#222222] ml-3">Data Science Bootcamp
                                                </p>
                                            </div>
                                        </a>
                                        <a href="#" onclick="showModal('web development')"
                                            class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-1">
                                            <div class="inline-flex items-center">
                                                <img src="{{ Vite::asset('resources/image/ilustration/ilustration_7.png') }}"
                                                    alt="ilustration 7" class="w-10 h-10">

                                                <p class="font-bold text-sm text-[#222222] ml-3">Web Development
                                                    Bootcamp</p>
                                            </div>
                                        </a>
                                        <a href="#" onclick="showModal('digital marketing')"
                                            class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                            role="menuitem" tabindex="-1" id="user-menu-item-1">
                                            <div class="inline-flex items-center">
                                                <img src="{{ Vite::asset('resources/image/ilustration/ilustration_8.png') }}"
                                                    alt="ilustration 8" class="w-10 h-10">

                                                <p class="font-bold text-sm text-[#222222] ml-3">Digital Marketing
                                                    Bootcamp</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="flex flex-row items-center cursor-pointer dropdown-menu">
                                    <button class="text-black  px-3 py-2 font-medium ml-4">About</button>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="flex flex-row items-center cursor-pointer dropdown-menu"
                                    onclick="toggleProgramMenuInternational()">
                                    <button class="text-black  px-3 py-2 font-medium">International Programs</button>
                                    <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.30001 4.3L0.700012 1.7C0.383345 1.38333 0.312679 1.021 0.488012 0.613C0.663345 0.205 0.975679 0.000666667 1.42501 0H6.57501C7.02501 0 7.33768 0.204333 7.51301 0.613C7.68835 1.02167 7.61735 1.384 7.30001 1.7L4.70001 4.3C4.60001 4.4 4.49168 4.475 4.37501 4.525C4.25835 4.575 4.13335 4.6 4.00001 4.6C3.86668 4.6 3.74168 4.575 3.62501 4.525C3.50835 4.475 3.40001 4.4 3.30001 4.3Z"
                                            fill="black" />
                                    </svg>
                                </div>
                                <script>
                                    function toggleProgramMenuInternational() {
                                        closeAll()
                                        document.getElementById('program-international').classList.toggle("hidden");
                                    }
                                </script>
                                <div id="program-international" class="relative hidden dropdown-menu-child">
                                    <div class="absolute w-full overflow-hidden inline-block -mt-3 pl-16">
                                        <div
                                            class=" h-8 w-8 bg-white rotate-45 transform origin-bottom-left ring-1 ring-black ring-opacity-5">
                                        </div>
                                    </div>
                                    <div class="absolute right-0 z-10 mt-5 w-[35rem] origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <div class="flex flow-row">
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="28" height="28" rx="4"
                                                            fill="url(#paint0_linear_152_272)" />
                                                        <g clip-path="url(#clip0_152_272)">
                                                            <path
                                                                d="M23.609 9.01386L14.195 5.69233C14.0688 5.6478 13.9312 5.6478 13.8051 5.69233L4.39102 9.01386C4.15695 9.09644 4.00031 9.31753 4 9.56573C3.99969 9.81394 4.15582 10.0354 4.38969 10.1185L13.8038 13.4653C13.8672 13.4878 13.9336 13.4991 14 13.4991C14.0664 13.4991 14.1328 13.4878 14.1962 13.4653L23.6103 10.1185C23.8442 10.0354 24.0003 9.81394 24 9.56573C23.9997 9.31753 23.843 9.09644 23.609 9.01386Z"
                                                                fill="white" />
                                                            <path
                                                                d="M22.5927 16.8348V11.7239L21.4208 12.1405V16.8348C21.0678 17.038 20.83 17.4186 20.83 17.8552C20.83 18.2917 21.0678 18.6724 21.4208 18.8755V21.7551C21.4208 22.0786 21.6831 22.341 22.0067 22.341C22.3303 22.341 22.5927 22.0786 22.5927 21.7551V18.8756C22.9456 18.6724 23.1835 18.2917 23.1835 17.8552C23.1835 17.4187 22.9457 17.038 22.5927 16.8348Z"
                                                                fill="white" />
                                                            <path
                                                                d="M14 14.671C13.7989 14.671 13.6008 14.6368 13.4112 14.5694L8.1189 12.688V15.2664C8.1189 15.8972 8.77698 16.4307 10.0749 16.852C11.2062 17.2192 12.6001 17.4214 14 17.4214C15.3998 17.4214 16.7938 17.2192 17.9251 16.852C19.223 16.4307 19.8811 15.8972 19.8811 15.2664V12.688L14.5888 14.5694C14.3992 14.6368 14.2011 14.671 14 14.671Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_152_272" x1="0"
                                                                y1="0" x2="28" y2="28"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FFB72B" />
                                                                <stop offset="1" stop-color="#FFA01B" />
                                                            </linearGradient>
                                                            <clipPath id="clip0_152_272">
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(4 4)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <p class="font-black text-base ml-4">Istanbul</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_6.png') }}"
                                                            alt="ilustration 6" class="w-10 h-10">
                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'istanbul', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_8.png') }}"
                                                            alt="ilustration 8" class="w-10 h-10">

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Digital
                                                            Marketing Bootcamp</p>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <div class="inline-flex px-6 pt-6">
                                                    <svg width="28" height="28" viewBox="0 0 28 28"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="28" height="28" rx="4"
                                                            fill="url(#paint0_linear_152_272)" />
                                                        <g clip-path="url(#clip0_152_272)">
                                                            <path
                                                                d="M23.609 9.01386L14.195 5.69233C14.0688 5.6478 13.9312 5.6478 13.8051 5.69233L4.39102 9.01386C4.15695 9.09644 4.00031 9.31753 4 9.56573C3.99969 9.81394 4.15582 10.0354 4.38969 10.1185L13.8038 13.4653C13.8672 13.4878 13.9336 13.4991 14 13.4991C14.0664 13.4991 14.1328 13.4878 14.1962 13.4653L23.6103 10.1185C23.8442 10.0354 24.0003 9.81394 24 9.56573C23.9997 9.31753 23.843 9.09644 23.609 9.01386Z"
                                                                fill="white" />
                                                            <path
                                                                d="M22.5927 16.8348V11.7239L21.4208 12.1405V16.8348C21.0678 17.038 20.83 17.4186 20.83 17.8552C20.83 18.2917 21.0678 18.6724 21.4208 18.8755V21.7551C21.4208 22.0786 21.6831 22.341 22.0067 22.341C22.3303 22.341 22.5927 22.0786 22.5927 21.7551V18.8756C22.9456 18.6724 23.1835 18.2917 23.1835 17.8552C23.1835 17.4187 22.9457 17.038 22.5927 16.8348Z"
                                                                fill="white" />
                                                            <path
                                                                d="M14 14.671C13.7989 14.671 13.6008 14.6368 13.4112 14.5694L8.1189 12.688V15.2664C8.1189 15.8972 8.77698 16.4307 10.0749 16.852C11.2062 17.2192 12.6001 17.4214 14 17.4214C15.3998 17.4214 16.7938 17.2192 17.9251 16.852C19.223 16.4307 19.8811 15.8972 19.8811 15.2664V12.688L14.5888 14.5694C14.3992 14.6368 14.2011 14.671 14 14.671Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_152_272" x1="0"
                                                                y1="0" x2="28" y2="28"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#FFB72B" />
                                                                <stop offset="1" stop-color="#FFA01B" />
                                                            </linearGradient>
                                                            <clipPath id="clip0_152_272">
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(4 4)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <p class="font-black text-base ml-4">Tokyo</p>
                                                </div>
                                                <a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'data science']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_6.png') }}"
                                                            alt="ilustration 6" class="w-10 h-10">
                                                        <p class="font-bold text-sm text-[#222222] ml-3">Data Science
                                                            Bootcamp</p>
                                                    </div>
                                                </a>
                                                <a href="{{ route('detail', ['slug' => 'Tokyo', 'course' => 'digital marketing']) }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                                    <div class="inline-flex items-center">
                                                        <img src="{{ Vite::asset('resources/image/ilustration/ilustration_8.png') }}"
                                                            alt="ilustration 8" class="w-10 h-10">

                                                        <p class="font-bold text-sm text-[#222222] ml-3">Digital
                                                            Marketing Bootcamp</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <a href="#" class="text-black  px-3 py-2 font-bold mx-2">Login</a>

                    @if ($current == 'data science')
                        <a href="#"
                            class="text-white px-5 py-2 font-bold rounded-md bg-[#0F5B89] mx-2">JoinNow</a>
                    @else
                        <a href="#"
                            class="text-[#FF9500] px-5 py-2 font-bold rounded-md bg-[#262626] mx-2">JoinNow</a>
                    @endif

                    <div class="text-[#DEDEDE] mx-2 text-xl">|</div>
                    <div class="relative mx-2">
                        <div class="flex flex-row items-center dropdown-menu" onclick="toggleLanguageMenu()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_5_2617)">
                                    <path
                                        d="M12 0C5.36756 0 0 5.36705 0 12C0 18.6324 5.36705 24 12 24C18.6324 24 24 18.633 24 12C24 5.36756 18.633 0 12 0ZM7.35684 2.4728C6.9937 3.46181 6.68888 4.46719 6.44283 5.48662C5.72372 5.26814 5.01633 5.00616 4.32206 4.70091C5.20116 3.77733 6.22556 3.02531 7.35684 2.4728ZM3.39084 5.82375C4.28948 6.23991 5.20917 6.58781 6.14719 6.86686C5.87503 8.31966 5.71941 9.79833 5.68247 11.2969H1.42978C1.5593 9.30745 2.23725 7.42453 3.39084 5.82375ZM3.39084 18.1763C2.23725 16.5755 1.5593 14.6925 1.42978 12.7031H5.68247C5.71941 14.2017 5.87503 15.6803 6.14719 17.1331C5.20917 17.4122 4.28953 17.7601 3.39084 18.1763ZM4.32206 19.2991C5.01633 18.9938 5.72367 18.7319 6.44283 18.5134C6.68892 19.5329 6.9937 20.5382 7.35684 21.5272C6.22612 20.975 5.20162 20.2231 4.32206 19.2991ZM11.2969 22.5702C10.5584 22.5222 9.83452 22.3989 9.1343 22.2034C8.57812 20.8853 8.13422 19.5338 7.80314 18.1552C8.94305 17.9003 10.1093 17.7513 11.2969 17.7091V22.5702ZM11.2969 16.302C10.0103 16.3446 8.74664 16.5039 7.51167 16.779C7.26633 15.4417 7.12495 14.0813 7.08919 12.7031H11.2969V16.302ZM11.2969 11.2969H7.08919C7.12495 9.91866 7.26633 8.5583 7.51167 7.221C8.74664 7.49606 10.0103 7.65544 11.2969 7.69795V11.2969ZM11.2969 6.29086C10.1093 6.24872 8.94305 6.0997 7.80314 5.84484C8.13422 4.4662 8.57812 3.1147 9.1343 1.79658C9.83452 1.60111 10.5584 1.47783 11.2969 1.42978V6.29086ZM20.6092 5.82375C21.7627 7.42453 22.4407 9.30745 22.5702 11.2969H18.3175C18.2806 9.79833 18.125 8.31966 17.8528 6.86686C18.7908 6.58781 19.7105 6.23991 20.6092 5.82375ZM19.6779 4.70086C18.9837 5.00616 18.2763 5.26814 17.5572 5.48658C17.3111 4.46714 17.0063 3.46177 16.6432 2.47275C17.7739 3.02498 18.7984 3.77686 19.6779 4.70086ZM12.7031 1.42978C13.4416 1.47783 14.1655 1.60111 14.8657 1.79658C15.4219 3.1147 15.8658 4.4662 16.1969 5.84484C15.057 6.0997 13.8907 6.24872 12.7031 6.29086V1.42978ZM12.7031 7.69795C13.9897 7.65544 15.2534 7.49606 16.4883 7.221C16.7337 8.5583 16.875 9.91866 16.9108 11.2969H12.7031V7.69795ZM14.8657 22.2034C14.1655 22.3989 13.4416 22.5222 12.7031 22.5702V17.7091C13.8907 17.7513 15.057 17.9003 16.1969 18.1552C15.8657 19.5338 15.4219 20.8853 14.8657 22.2034ZM12.7031 16.302V12.7031H16.9108C16.875 14.0813 16.7337 15.4417 16.4883 16.779C15.2534 16.5039 13.9897 16.3446 12.7031 16.302ZM16.6432 21.5272C17.0063 20.5382 17.3111 19.5328 17.5572 18.5134C18.2763 18.7319 18.9837 18.9938 19.6779 19.2991C18.7988 20.2227 17.7744 20.9747 16.6432 21.5272ZM20.6092 18.1763C19.7105 17.7601 18.7908 17.4122 17.8528 17.1331C18.125 15.6803 18.2806 14.2017 18.3175 12.7031H22.5702C22.4407 14.6925 21.7627 16.5755 20.6092 18.1763Z"
                                        fill="#262626" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_5_2617">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <button class="text-black  px-3 py-2 font-bold">English</button>
                            <svg width="8" height="5" viewBox="0 0 8 5" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.30001 4.3L0.700012 1.7C0.383345 1.38333 0.312679 1.021 0.488012 0.613C0.663345 0.205 0.975679 0.000666667 1.42501 0H6.57501C7.02501 0 7.33768 0.204333 7.51301 0.613C7.68835 1.02167 7.61735 1.384 7.30001 1.7L4.70001 4.3C4.60001 4.4 4.49168 4.475 4.37501 4.525C4.25835 4.575 4.13335 4.6 4.00001 4.6C3.86668 4.6 3.74168 4.575 3.62501 4.525C3.50835 4.475 3.40001 4.4 3.30001 4.3Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <script>
                            function toggleLanguageMenu() {
                                closeAll();
                                document.getElementById('language-menu').classList.toggle("hidden");
                            }
                        </script>
                        {{-- <div
                            class="absolute right-1 shadow-sm w-0 h-0 -mt-3 border-l-[20px] border-l-transparent border-b-[20px] border-b-white border-r-[20px] border-r-transparent ">
                        </div> --}}
                        <div id="language-menu" class="relative hidden dropdown-menu-child">
                            <div class="absolute w-full overflow-hidden inline-block -mt-3 pl-10">
                                <div
                                    class=" h-8 w-8 bg-white rotate-45 transform origin-bottom-left ring-1 ring-black ring-opacity-5">
                                </div>
                            </div>
                            <div class="absolute right-0 z-10 mt-5 w-48 origin-top-right rounded-md bg-gray-50 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">
                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                    <div class="inline-flex items-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_160_470)">
                                                <path
                                                    d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z"
                                                    fill="#F0F0F0" />
                                                <path
                                                    d="M2.48063 4.69409C1.53802 5.92048 0.827251 7.334 0.413391 8.86958H6.65611L2.48063 4.69409Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M23.5866 8.86953C23.1728 7.334 22.4619 5.92048 21.5194 4.69409L17.344 8.86953H23.5866Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M0.413391 15.1304C0.827297 16.6659 1.53806 18.0794 2.48063 19.3058L6.65597 15.1304H0.413391Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M19.3059 2.48061C18.0795 1.538 16.666 0.827236 15.1304 0.41333V6.656L19.3059 2.48061Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M4.69415 21.5193C5.92054 22.4619 7.33406 23.1727 8.86959 23.5866V17.344L4.69415 21.5193Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M8.86954 0.41333C7.33401 0.827236 5.9205 1.538 4.69415 2.48056L8.86954 6.65596V0.41333Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M15.1304 23.5866C16.666 23.1727 18.0795 22.4619 19.3058 21.5194L15.1304 17.344V23.5866Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M17.344 15.1304L21.5194 19.3058C22.4619 18.0795 23.1728 16.6659 23.5866 15.1304H17.344Z"
                                                    fill="#0052B4" />
                                                <path
                                                    d="M23.8984 10.4348H13.5653H13.5653V0.101578C13.0529 0.034875 12.5305 0 12 0C11.4694 0 10.9471 0.034875 10.4348 0.101578V10.4347V10.4347H0.101578C0.034875 10.9471 0 11.4695 0 12C0 12.5306 0.034875 13.0529 0.101578 13.5652H10.4347H10.4347V23.8984C10.9471 23.9651 11.4694 24 12 24C12.5305 24 13.0529 23.9652 13.5652 23.8984V13.5653V13.5653H23.8984C23.9651 13.0529 24 12.5306 24 12C24 11.4695 23.9651 10.9471 23.8984 10.4348Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M15.1304 15.1304L20.4852 20.4852C20.7315 20.239 20.9665 19.9817 21.1906 19.7148L16.6062 15.1304H15.1304V15.1304Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M8.86957 15.1306H8.86947L3.51471 20.4854C3.7609 20.7317 4.01829 20.9666 4.2851 21.1908L8.86957 16.6062V15.1306Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M8.86957 8.8696V8.86951L3.51476 3.51465C3.26848 3.76084 3.03354 4.01823 2.80939 4.28504L7.3939 8.86955L8.86957 8.8696Z"
                                                    fill="#D80027" />
                                                <path
                                                    d="M15.1304 8.86956L20.4853 3.51465C20.2391 3.26837 19.9817 3.03344 19.7149 2.80933L15.1304 7.39384V8.86956Z"
                                                    fill="#D80027" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_160_470">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <p class="font-bold text-sm text-[#222222] ml-3">English</p>
                                    </div>
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 shadow-sm m-2 rounded-xl bg-white"
                                    role="menuitem" tabindex="-1" id="user-menu-item-1">
                                    <div class="inline-flex items-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_160_434)">
                                                <path
                                                    d="M23.9062 12H0.09375C0.09375 5.4247 5.42381 0.09375 12 0.09375C18.5753 0.09375 23.9062 5.4247 23.9062 12Z"
                                                    fill="#ED1C24" />
                                                <path
                                                    d="M23.9062 12C23.9062 18.5753 18.5753 23.9062 12 23.9062C5.42381 23.9062 0.09375 18.5753 0.09375 12H23.9062Z"
                                                    fill="#F5F5F5" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_160_434">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <p class="font-bold text-sm text-[#222222] ml-3">Bahasa Indonesia</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Dashboard</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>
</div>

<script>
    window.addEventListener('click', function(e) {
        const target = event.target;
        const parent = target.parentNode;
        if (!parent.classList.contains('dropdown-menu')) {
            closeAll();
        }
    })

    function closeAll() {
        const child = document.querySelectorAll('.dropdown-menu-child')
        child.forEach(element => {
            if (!element.classList.contains('hidden')) {
                element.classList.toggle("hidden");
            }
        });
    }
</script>
