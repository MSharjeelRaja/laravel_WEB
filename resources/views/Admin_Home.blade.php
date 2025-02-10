+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Dashboard</title>
    @vite('resources/css/app.css')

    <style>
          @keyframes marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }
        .marquee-container {
            display: flex;
            min-width: 200%;
            animation: marquee 50s linear infinite;
        }
        .relative:hover .marquee-container {
            animation-play-state: paused;
        }
        .btn-hover:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .nav-item {
            position: relative;
            color: #4b5563;
            font-weight: 600;
            transition: color 0.3s ease-in-out;
        }

        .nav-item:hover {
            color: #1d4ed8;
        }

        .nav-item::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -2px;
            width: 0;
            height: 2px;
            background-color: #1d4ed8;
            transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
        }

        .nav-item:hover::after {
            width: 100%;
            left: 0;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-300 via-blue-200 to-blue-100 min-h-screen p-0 m-0">


    <div class="flex justify-between items-center bg-white p-4 shadow-md">
        <div class="text-5xl ml-6 font-bold text-blue-600">LMS</div>
        <div class="flex items-center space-x-4">
            <a href="#" class="text-gray-600 font-semibold nav-item">Home</a>
            <a href="#" class="text-gray-600 font-semibold nav-item">Courses</a>
            <a href="#" class="text-gray-600 font-semibold nav-item">Tecahers</a>
            <a href="#" class="text-gray-600 font-semibold nav-item">Enrollments</a>
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/2021-ARID-4583.png') }}" alt="Profile Picture" class="w-11 h-10 rounded-full border border-gray-300">
                <div class="flex flex-col">
                    <span class="text-gray-600 font-semibold">Sharjeel</span>
                    <span class="text-sm text-gray-400">Admin</span>
                </div>
            </div>

        </div>
    </div>
    <div class="max-w-6xl mx-auto mb-4 mt-6 p-6 rounded-2xl shadow-lg text-center fade-in backdrop-blur-lg border border-white/10" style="background: linear-gradient(to bottom right, rgba(0, 198, 255, 0.8), rgba(0, 114, 255, 0.8), rgba(30, 61, 143, 0.8));">
        <img src="{{ asset('images/2021-ARID-4583.png') }}" alt="Profile Picture" class="mx-auto rounded-full border-4 border-white shadow-lg w-24 h-24 object-cover">
        <h2 class="text-white text-2xl font-bold mt-3">Muhammad Usman</h2>
        <p class="text-white opacity-80">Admin</p>
        <button class="account-btn text-white px-6 py-3 mt-4 rounded-full bg-white/20 hover:bg-white/30 transition-all duration-300 shadow-lg">Account Details</button>
    </div>
    <div class="relative w-full max-w-8xl overflow-hidden bg-gradient-to-r from-blue-600 to-indigo-800 text-white shadow-lg rounded-lg border border-white/10 mx-auto py-4">
        <div class="marquee-container flex space-x-16 whitespace-nowrap text-lg font-semibold tracking-wide">
            <div class="marquee flex space-x-20">
                <span>🚀 Semester Registrations Open</span>
                <span>🏛️ Fee Deadline: 15 Feb 2025</span>
                <span>🎓 Convocation: 20 March 2025</span>
                <span>📢 Students Week Soon</span>
                <span>📝 Mids : 25 March 2025</span>
            </div>
            <div class="marquee flex space-x-16">
                <span>🚀 Semester Registrations Open</span>
                <span>🏛️ Fee Deadline: 15 Feb 2025</span>
                <span>🎓 Convocation: 20 March 2025</span>
                <span>📢 New Student Portal Launched!</span>
                <span>📝 Exam Forms Submission Ends Soon</span>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto mt-6 bg-white p-6 rounded-2xl shadow-lg text-center border border-gray-200">
        <h3 class="text-xl font-bold text-gray-800">🎓 Session: <span class="text-blue-600">FALL-2025</span></h3>
        <div class="grid grid-cols-2 gap-6 mt-6">
            <div class="p-6 bg-gray-100 rounded-xl shadow-md text-center">
                <p class="text-gray-600 font-semibold">Start Date</p>
                <p class="text-2xl font-bold text-blue-700 mt-1">📅 24 Feb 2025</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-xl shadow-md text-center">
                <p class="text-gray-600 font-semibold">End Date</p>
                <p class="text-2xl font-bold text-red-600 mt-1">📅 31 June 2025</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto mt-6 flex items-center">
        <button id="prevBtn" class="bg-white p-4 rounded-lg shadow-md text-center btn-hover mr-5">⬅️</button>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 flex-1" id="cardContainer">
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover">
                <span class="text-4xl">🎓</span>
                <p class="mt-2 font-bold">Enrolled Courses</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover">
                <span class="text-4xl">📚</span>
                <p class="mt-2 font-bold">Assigned Courses</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover">
                <span class="text-4xl">👨‍🎓</span>
                <p class="mt-2 font-bold">Students</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover">
                <span class="text-4xl">👨‍🏫</span>
                <p class="mt-2 font-bold">Teachers</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover hidden">
                <span class="text-4xl">📜</span>
                <p class="mt-2 font-bold">Exams</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover hidden">
                <span class="text-4xl">🗂️</span>
                <p class="mt-2 font-bold">Results</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover hidden">
                <span class="text-4xl">📑</span>
                <p class="mt-2 font-bold">Assignments</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover hidden">
                <span class="text-4xl">🔔</span>
                <p class="mt-2 font-bold">Notifications</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover hidden">
                <span class="text-4xl">⚙️</span>
                <p class="mt-2 font-bold">Settings</p>
            </button>
            <button class="bg-white p-6 rounded-lg shadow-md text-center btn-hover hidden">
                <span class="text-4xl">💬</span>
                <p class="mt-2 font-bold">Messages</p>
            </button>
        </div>
        <button id="nextBtn" class="bg-white p-4 rounded-lg shadow-md text-center btn-hover ml-5">
            <span>➡️</span>
        </button>
    </div>
    <div class="max-w-6xl mx-auto mt-6 bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-lg font-bold">Offered Courses</h3>
        <div class="grid grid-cols-2 gap-4 mt-4">
            <button class="btn-hover bg-blue-600 text-white p-6 rounded-lg text-center">
                <p class="font-bold">Offered Courses</p>
                <p class="text-3xl font-bold">33</p>
            </button>
            <button class="btn-hover bg-blue-600 text-white p-6 rounded-lg text-center">
                <p class="font-bold">Total Courses</p>
                <p class="text-3xl font-bold">60</p>
            </button>
        </div>
    </div>
    <div class="max-w-6xl mx-auto mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white text-black p-6 rounded-lg">
            <h3 class="text-lg font-bold ">Students</h3>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <button class="bg-blue-600 p-6 rounded-lg text-center text-white btn-hover">
                    <p class="font-bold">Graduate</p>
                    <p class="text-3xl font-bold">700</p>
                </button>
                <button class="bg-blue-600 p-6 rounded-lg text-white text-center btn-hover">
                    <p class="font-bold">Under-Graduate</p>
                    <p class="text-3xl font-bold">2056</p>
                </button>
            </div>
        </div>
        <div class="bg-white text-black p-6 rounded-lg">
            <h3 class="text-lg font-bold">Teachers</h3>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <button class="bg-blue-600 p-6 rounded-lg text-center btn-hover">
                    <p class="font-bold text-white">Lecturer</p>
                    <p class="text-3xl font-bold text-white">26</p>
                </button>
                <button class="bg-blue-600 p-6 rounded-lg text-center btn-hover">
                    <p class="font-bold text-white">Junior Lecturer</p>
                    <p class="text-3xl font-bold text-white">12</p>
                </button>
            </div>
        </div>
    </div>
    <footer class="bg-blue-600 p-2 mt-20 shadow-md text-center">
        <h4 class=" font-bold text-2xl mb-4 mt-4 text-white">Learning Management System</h4>
        <p class="text-white text-1xl">&copy; 2025 LMS. All Rights Reserved.</p>
        <p class="text-white text-1xl">Sameer  |  Ali  | Sharjeel</p>
    </footer>
</body>
<script>
    let currentIndex = 0;
    const buttons = document.querySelectorAll("#cardContainer button");
    const visibleCount = 4;

    function updateVisibility() {
        buttons.forEach((btn, index) => {
            btn.classList.toggle("hidden", index < currentIndex || index >= currentIndex + visibleCount);
        });
    }

    document.getElementById("prevBtn").addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex -= 1;
            updateVisibility();
        }
    });

    document.getElementById("nextBtn").addEventListener("click", () => {
        if (currentIndex + visibleCount < buttons.length) {
            currentIndex += 1;
            updateVisibility();
        }
    });

    updateVisibility();
</script>
</html>
