<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inter/inter.css') }}">
    <link href="{{ asset('css/daisyui/full.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/tailwind/tailwind.min.js') }}"></script>
    <script src="{{ asset('js/tailwind/tailwind.pugins.min.js') }}"></script>
    <script src="{{ asset('js/tailwind/index.global.js') }}"></script>
    <title>Расписание</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style>
.swiper-button-next,
.swiper-button-prev {
    opacity: 0;
    transition: opacity 0.3s ease;
}

.swiper:hover .swiper-button-next,
.swiper:hover .swiper-button-prev {
    opacity: 0.5;
}
</style>
<body class=" min-h-screen items-center justify-center  h-screen overflow-hidden">

<section id="carousel-container" class="relative h-screen">
    <div class="swiper w-full h-full">
        <div class="swiper-wrapper h-full" id="swiper-wrapper">
            <ul role="list" class="divide-y divide-gray-100 bg-gray-300 text-black w-full h-full flex flex-col">
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                <li class="flex justify-between gap-x-6 p-5 flex-1">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="size-20 flex-none rounded-full "></div>
                        <div class="min-w-0 flex-auto">
                            <p class="text-3xl font-semibold ">Новичихин Андрей Евгеньевич</p>
                            <p class="mt-1 truncate text-2xl font-semibold">Врач-кардиолог</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-2xl font-semibold items-center m-auto">Время</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">10:00-12:00</p>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end  ">
                        <p class="text-2xl font-semibold items-center m-auto">Кабинет</p>
                        <p class="mt-1 text-3xl font-semibold items-center m-auto">102</p>
                    </div>
                </li>
                



            </ul>
        </div>

        <!-- Стрелки -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Полноэкранная кнопка -->
    <button id="fullscreen-btn" class="btn btn-sm fixed top-2 right-2 z-50">⛶</button>
</section>
<script defer>
    // Полноэкранная кнопка
    const fullscreenBtn = document.getElementById("fullscreen-btn");
    fullscreenBtn.addEventListener("click", () => {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else {
            document.exitFullscreen();
        }
    });
</script>
<script defer>
    const ITEMS_PER_PAGE = 8;
    
    const originalList = document.querySelector("ul[role='list']");
    const ORIGINAL_LIST_LENGH = originalList.children.length
    if (ORIGINAL_LIST_LENGH % ITEMS_PER_PAGE != 0) {
        const LACKING = ITEMS_PER_PAGE - originalList.children.length % ITEMS_PER_PAGE
        
        for (let i = 0;  i < LACKING; i++) {
            const EL = document.createElement('li');
            EL.className = 'flex justify-between gap-x-6 p-5 flex-1'
            originalList.appendChild(EL)
        }
    }
    const items = Array.from(originalList.children);
    const wrapper = document.getElementById("swiper-wrapper");

    originalList.remove(); // удалим старый список

    for (let i = 0; i < items.length; i += ITEMS_PER_PAGE) {
        const slide = document.createElement("div");
        slide.className = "swiper-slide";

        const pageList = document.createElement("ul");
        pageList.className = "divide-y divide-gray-100 bg-gray-300 text-black w-full flex flex-col";
        pageList.setAttribute("role", "list");

        const currentSlice = items.slice(i, i + ITEMS_PER_PAGE);
        const useFlex = currentSlice.length === ITEMS_PER_PAGE;

        currentSlice.forEach(item => {
            const clonedItem = item.cloneNode(true);
            // добавим flex-1 только если полный слайд
            if (useFlex) {
                pageList.classList.add("h-full");
                clonedItem.classList.add("flex-1");
            }
            pageList.appendChild(clonedItem);
        });

        slide.appendChild(pageList);
        wrapper.appendChild(slide);
    }

    if (wrapper.children.length > 1) {
        new Swiper('.swiper', {
        loop: true,
        autoplay: {
            delay: 30000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    } else {
        // Если всего один слайд — показываем без Swiper
        document.querySelector(".swiper-button-next").style.display = "none";
        document.querySelector(".swiper-button-prev").style.display = "none";
    }

    
</script>

</body>
</html>