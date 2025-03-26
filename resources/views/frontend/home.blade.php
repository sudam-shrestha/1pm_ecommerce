<x-frontend-layout>

    <section>
        <div class="container text-center py-20">
            <h1 class="text-3xl mb-5">
                List your Restaurant or Store at Floor Digital Pvt. Ltd.! <br>
                Reach 1,00,000 + new customers.
            </h1>

            <button data-modal-target="request-modal" data-modal-toggle="request-modal"
                class="btn-primary cursor-pointer">Send A Request</button>


            <!-- Main modal -->
            <div id="request-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="primary font-semibold text-2xl">
                                Welcome to Floor Digital Pvt. Ltd.
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="request-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <form action="" method="post">
                                @csrf

                                <div class="grid grid-cols-2 gap-4 text-left">
                                    <div>
                                        <label for="name">Your Name <span class="text-red-600">*</span></label>
                                        <input type="text" name="name" id="name" class="w-full">
                                    </div>

                                    <div>
                                        <label for="email">Your Email <span class="text-red-600">*</span></label>
                                        <input type="email" name="email" id="email" class="w-full">
                                    </div>

                                    <div>
                                        <label for="shop_name">Shop Name <span class="text-red-600">*</span></label>
                                        <input type="text" name="shop_name" id="shop_name" class="w-full">
                                    </div>

                                    <div>
                                        <label for="address">Shop Address <span class="text-red-600">*</span></label>
                                        <input type="text" name="address" id="address" class="w-full">
                                    </div>

                                    <div>
                                        <button type="button" class="btn-primary cursor-pointer">Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-frontend-layout>
