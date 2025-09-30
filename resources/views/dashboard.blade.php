<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <!-- Top panels: Create Product, My Products, Purchase History -->
        <div class="grid gap-6 md:grid-cols-3">
            <!-- Create Product Panel -->
            <section class="rounded-xl border border-neutral-200 bg-white p-4 text-black shadow-sm">
                <h2 class="mb-4 text-lg font-semibold text-black">Nieuw product</h2>

                <form class="space-y-4" action="#" method="post">
                    <!-- Product name -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black" for="name">Naam</label>
                        <input id="name" name="name" type="text" placeholder="Bijv. iPhone 14"
                            class="w-full rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-black outline-none ring-0 transition focus:border-neutral-400" />
                    </div>

                    <!-- Start price -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black" for="name">Startprijs</label>
                        <input id="name" name="name" type="number" placeholder="0,00"
                            class="w-full rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-black outline-none ring-0 transition focus:border-neutral-400" />
                    </div>

                    <!-- Status -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black" for="status">Staat</label>
                        <select id="status" name="status"
                            class="w-full rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-black outline-none ring-0 transition focus:border-neutral-400">
                            <option value="Nieuwstaat">Nieuwstaat</option>
                            <option value="Tweedehands">Tweedehands</option>
                        </select>
                    </div>

                    <!-- Image URL -->
                    {{-- <div class="space-y-1">
                        <label class="block text-sm font-medium text-black" for="image_url">Afbeelding URL</label>
                        <input id="image_url" name="image_url" type="url" placeholder="https://..."
                            class="w-full rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-black outline-none ring-0 transition focus:border-neutral-400" />
                    </div> --}}

                    <!-- Description -->
                    <div class="space-y-1">
                        <label class="block text-sm font-medium text-black" for="description">Beschrijving</label>
                        <textarea id="description" name="description" rows="4" placeholder="Korte omschrijving"
                            class="w-full resize-y rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-black outline-none ring-0 transition focus:border-neutral-400"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-lg bg-neutral-900 px-4 py-2 text-sm font-medium text-white transition hover:bg-neutral-800 active:bg-neutral-900">
                            Opslaan
                        </button>
                    </div>
                </form>
            </section>

            <!-- My Products Panel -->
            <section class="rounded-xl border border-neutral-200 bg-white p-4 text-black shadow-sm">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-black">Mijn producten</h2>
                    <a href="#" class="text-sm text-blue-700 hover:underline">Alles bekijken</a>
                </div>

                <div class="overflow-hidden rounded-lg border border-neutral-200">
                    <table class="w-full text-left text-sm text-black">
                        <thead class="bg-neutral-50 text-black">
                            <tr>
                                <th class="px-3 py-2 font-medium">Naam</th>
                                <th class="px-3 py-2 font-medium">Startprijs</th>
                                <th class="px-3 py-2 font-medium">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200">
                            <!-- Placeholder rows (replace with loop) -->
                            <tr class="hover:bg-neutral-50">
                                <td class="px-3 py-2">Voorbeeld product A</td>
                                <td class="px-3 py-2">€ 10,00</td>
                                <td class="px-3 py-2"><span class="rounded-full bg-emerald-100 px-2 py-0.5 text-xs text-emerald-700">Nieuwstaat</span></td>
                            </tr>
                            <tr class="hover:bg-neutral-50">
                                <td class="px-3 py-2">Voorbeeld product B</td>
                                <td class="px-3 py-2">€ 25,00</td>
                                <td class="px-3 py-2"><span class="rounded-full bg-amber-100 px-2 py-0.5 text-xs text-amber-700">Tweedehands</span></td>
                            </tr>
                            <!-- Empty state example -->
                            <!-- <tr><td colspan="3" class="px-3 py-6 text-center text-neutral-500">Geen producten gevonden.</td></tr> -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Purchase History Panel -->
            <section class="rounded-xl border border-neutral-200 bg-white p-4 text-black shadow-sm">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-black">Aankoopgeschiedenis</h2>
                    <a href="#" class="text-sm text-blue-700 hover:underline">Alles bekijken</a>
                </div>

                <div class="overflow-hidden rounded-lg border border-neutral-200">
                    <table class="w-full text-left text-sm text-black">
                        <thead class="bg-neutral-50 text-black">
                            <tr>
                                <th class="px-3 py-2 font-medium">Product</th>
                                <th class="px-3 py-2 font-medium">Prijs</th>
                                <th class="px-3 py-2 font-medium">Datum</th>
                                <th class="px-3 py-2 font-medium">Verkoper</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200">
                            <!-- Placeholder rows (replace with loop) -->
                            <tr class="hover:bg-neutral-50">
                                <td class="px-3 py-2">Voorbeeld product C</td>
                                <td class="px-3 py-2">€ 99,00</td>
                                <td class="px-3 py-2">12-09-2025</td>
                                <td class="px-3 py-2">Jan Jansen</td>
                            </tr>
                            <tr class="hover:bg-neutral-50">
                                <td class="px-3 py-2">Voorbeeld product D</td>
                                <td class="px-3 py-2">€ 45,50</td>
                                <td class="px-3 py-2">03-09-2025</td>
                                <td class="px-3 py-2">Pietje Puk</td>
                            </tr>
                            <!-- Empty state example -->
                            <!-- <tr><td colspan="4" class="px-3 py-6 text-center text-neutral-500">Geen aankopen gevonden.</td></tr> -->
                        </tbody>
                    </table>
                </div>
            </section>
            </div>

        <!-- Optional: full-width section for future charts or stats -->
        <section class="rounded-xl border border-neutral-200 bg-white p-6 text-black shadow-sm">
            <div class="flex items-center justify-between">
                <h3 class="text-base font-semibold text-black">Overzicht</h3>
                <span class="text-xs text-neutral-600">Placeholder sectie voor statistieken of grafieken</span>
            </div>
            <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-lg border border-neutral-200 p-4 text-black">
                    <div class="text-sm text-neutral-600">Totaal producten</div>
                    <div class="mt-1 text-2xl font-semibold text-black">12</div>
                </div>
                <div class="rounded-lg border border-neutral-200 p-4 text-black">
                    <div class="text-sm text-neutral-600">Totaal aankopen</div>
                    <div class="mt-1 text-2xl font-semibold text-black">4</div>
                </div>
                <div class="rounded-lg border border-neutral-200 p-4 text-black">
                    <div class="text-sm text-neutral-600">Gem. startprijs</div>
                    <div class="mt-1 text-2xl font-semibold text-black">€ 23,75</div>
                </div>
                <div class="rounded-lg border border-neutral-200 p-4 text-black">
                    <div class="text-sm text-neutral-600">Laatst geüpdatet</div>
                    <div class="mt-1 text-2xl font-semibold text-black">Vandaag</div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
