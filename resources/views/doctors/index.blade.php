<!-- resources/views/doctors/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors List</title>
    @vite('resources/css/app.css') <!-- If using Vite -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Doctors List</h1>
        <div class="bg-white rounded-lg shadow-md p-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Specialty</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($doctors as $doctor)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $doctor['name'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $doctor['specialty'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('doctors.show', $doctor['id']) }}" class="text-blue-600 hover:text-blue-900">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
