<x-layouts.page>
    <h1 class="text-3xl">aanbod</h1>
    <div class="overflow-x-auto rounded-xl border border-zinc-200 bg-white shadow-sm">
        <table class="w-full text-sm text-left text-zinc-700">
          <thead class="bg-zinc-50 text-zinc-500 uppercase text-xs font-medium">
            <tr>
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Start Price</th>
              <th class="px-4 py-3">Description</th>
              <th class="px-4 py-3">Image</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Verkocht Aan</th>
              <th class="px-4 py-3">Created At</th>
              <th class="px-4 py-3">Updated At</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-zinc-200">
            @forelse ($products as $product)
            <tr class="hover:bg-zinc-50 transition">
              <td class="px-4 py-3 font-medium text-zinc-900">{{ $product->name }}</td>
              <td class="px-4 py-3">€{{ number_format($product->start_price, 2, ',', '.') }}</td>
              <td class="px-4 py-3 text-zinc-600">{{ $product->description }}</td>
              <td class="px-4 py-3">
                @if ($product->image_url)
                  <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-12 h-12 rounded-md object-cover shadow-sm">
                @else
                  <div class="w-12 h-12 rounded-md bg-zinc-100 flex items-center justify-center text-zinc-400">N/A</div>
                @endif
              </td>
              <td class="px-4 py-3 bg-yellow-400">{{ $product->status }}</td>
              <td class="px-4 py-3">{{ $product->verkocht_aan }}</td>
              <td class="px-4 py-3">{{ $product->created_at }}</td>
              <td class="px-4 py-3">{{ $product->updated_at }}</td>
            </tr>
            @empty
            <tr>
              <td colspan="8" class="px-4 py-6 text-center text-zinc-500">Geen producten gevonden.</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      
</x-layouts.page>
