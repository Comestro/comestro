<div class="container mx-auto py-12 px-4">
    <section class="bg-white p-6">
        <h3 class="text-2xl font-bold text-gray-900 mb-6">Comments ({{ $comments->count() }})</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Comment Form -->
            <div>
                <h4 class="text-lg font-semibold text-gray-900 mb-4">Leave a Comment</h4>
                <form wire:submit.prevent="postComment">
                    <input type="text" wire:model="name" class="w-full p-3 border border-gray-300 rounded-lg mb-2 focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Your Name">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <textarea wire:model="content" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" rows="4" placeholder="Write your comment here..."></textarea>
                    @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <button type="submit" class="mt-4 px-6 py-2 bg-orange-500 text-white rounded-full font-semibold hover:bg-orange-700 transition-colors">
                        Post Comment ⇛
                    </button>
                </form>

                @if (session()->has('message'))
                    <p class="text-green-500 mt-2">{{ session('message') }}</p>
                @endif
            </div>

            <!-- Comments List -->
            <div>
                @foreach ($comments as $comment)
                    <div class="border-b border-gray-200 pb-4 mb-4">
                        <div class="flex items-start space-x-4">
                            <img src="{{ asset('home/projects/learn.png') }}" alt="" class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0">
                            <div>
                                <p class="font-semibold text-gray-800">{{ $comment->name }}</p>
                                <p class="text-sm text-gray-500">{{ $comment->created_at->format('M d, Y • H:i A') }}</p>
                                <p class="text-gray-700 mt-2">{{ $comment->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $comments->links() }}
                </div>
            </div>
        </div>
    </section>
</div>