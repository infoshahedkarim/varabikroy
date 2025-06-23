<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('General Board') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <h1>Welcome to Varabikroy.com Backend</h1>
                    <div id="datetime" style="
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3f4f6;
            color: #111827;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            font-size: 18px;
            margin-top: 20px;">
                    </div>
                </div>

                <script>
                    function updateDateTime() {
                        const now = new Date();

                        const options = {
                            weekday: 'long',
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric',
                            hour: '2-digit',
                            minute: '2-digit',
                            second: '2-digit',
                            hour12: true
                        };

                        const formattedDateTime = now.toLocaleString('en-US', options);
                        document.getElementById('datetime').innerHTML = formattedDateTime;
                    }

                    // Update every second
                    setInterval(updateDateTime, 1000);
                    updateDateTime();
                </script>
            </div>
        </div>
    </div>
</x-app-layout>