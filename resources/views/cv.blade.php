<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Raihan Putra Akbar</title>
    @vite('resources/css/app.css')
    <style>
        /* Custom scrollbar untuk tampilan lebih rapi */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 font-sans leading-relaxed">

    <div class="max-w-5xl mx-auto px-4 py-10 space-y-6">

        <!-- HEADER -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 h-32"></div>
            <div class="px-8 pb-8 relative">
                <!-- Avatar -->
                <div class="absolute top-1 left-8 w-24 h-24 bg-white rounded-full p-1 shadow-lg">
                    <div class="w-full h-full bg-slate-200 rounded-full overflow-hidden">
                        <img src="{{asset('assets/foto_profil.jpeg')}}" alt="Foto Profil" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <div class="mt-16 md:mt-0 md:ml-32 md:pt-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h1 class="text-3xl font-bold text-slate-900">RAIHAN PUTRA AKBAR</h1>
                        <p class="text-blue-600 font-medium text-lg">Undergraduate Computer Science Student</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex flex-col items-start md:items-end text-sm text-slate-600 space-y-1">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Jakarta, Indonesia
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            +62 82288369020
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            raihanputraakbarjamil020805@gmail.com
                        </div>
                    </div>
                </div>

                <!-- Summary Section inside Header -->
                <div class="mt-6 border-t pt-4">
                    <p class="text-slate-600 text-justify">
                        A 20-year-old student currently enrolled in the Computer Science Major at Pertamina University. My interest in computer science comes from my experience during high school which found a match with computer science and today's world which relies heavily on computer science for modernization. I then developed this interest in computer science during college, leading to machine learning and artificial intelligence. I am also honored to be an awardee of a full scholarship from Pertamina Hulu Rokan that greatly supports my educational pursuits. I am actively involved in activities closely related to renewable energy and environment, and I am part of the Sobat Bumi Awardees of Pertamina University Jakarta.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- COLUMN KIRI (Pendidikan & Skill) -->
            <div class="md:col-span-1 space-y-6">
                
                <!-- EDUCATION CARD -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-slate-800 border-b-2 border-blue-500 pb-2 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                        Education
                    </h2>
                    
                    <div class="mb-4">
                        <h3 class="font-bold text-lg text-slate-900">Universitas Pertamina</h3>
                        <p class="text-sm text-slate-500 mb-1">Sept 2023 - Now</p>
                        <p class="text-sm font-medium text-slate-700">Computer Science Major</p>
                        <p class="text-xs text-slate-500 italic mt-1">Pertamina Hulu Rokan Fully Funded Scholarship Awardee</p>
                        <div class="mt-2 inline-block bg-blue-100 text-blue-800 text-xs font-bold px-2 py-1 rounded">
                            CGPA 4.00/4.00
                        </div>
                    </div>
                </div>

                <!-- SKILLS CARD -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-slate-800 border-b-2 border-blue-500 pb-2 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                        Skills
                    </h2>
                    
                    <div class="mb-4">
                        <h4 class="text-sm font-bold text-slate-700 uppercase mb-2">Hard Skills</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['C++', 'Python', 'MS Office', 'IoT Dev', 'Web Dev', 'DevOps', 'Project Management'] as $skill)
                                <span class="bg-slate-100 text-slate-700 text-xs font-medium px-2.5 py-0.5 rounded border border-slate-200">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-bold text-slate-700 uppercase mb-2">Soft Skills</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Leadership', 'Problem Solving', 'Communication', 'Decisiveness', 'Public Speaking', 'Teamwork'] as $skill)
                                <span class="bg-indigo-50 text-indigo-700 text-xs font-medium px-2.5 py-0.5 rounded border border-indigo-100">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

            <!-- COLUMN KANAN (Pengalaman & Proyek) -->
            <div class="md:col-span-2 space-y-6">

                <!-- ORGANIZATIONAL EXPERIENCE CARD -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-slate-800 border-b-2 border-blue-500 pb-2 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        Organizational Experiences
                    </h2>

                    <div class="space-y-6">
                        <!-- Item 1 -->
                        <div class="relative pl-4 border-l-2 border-slate-200">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start">
                                <h3 class="font-bold text-slate-800">Sobat Bumi Universitas Pertamina</h3>
                                <span class="text-xs font-semibold bg-green-100 text-green-800 px-2 py-1 rounded-full whitespace-nowrap mt-1 sm:mt-0">Sept 2023 - Now</span>
                            </div>
                            <p class="text-sm font-medium text-slate-600 italic">Pertamina Foundation Scholarship Awardee</p>
                            <p class="text-sm text-slate-600 mt-2">
                                Environmental education NGO headquartered in Pertamina University dedicated to tackling environmental issues.
                            </p>
                        </div>

                        <!-- Item 2 -->
                        <div class="relative pl-4 border-l-2 border-slate-200">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start">
                                <h3 class="font-bold text-slate-800">RETRO (Robotic Technology Engineering Club)</h3>
                                <span class="text-xs font-semibold bg-slate-100 text-slate-800 px-2 py-1 rounded-full whitespace-nowrap mt-1 sm:mt-0">Oct 2023 - Now</span>
                            </div>
                            <p class="text-sm font-medium text-slate-600 italic">Treasurer in 2024 SAFFIR Cabinet</p>
                        </div>

                        <!-- Item 3 -->
                        <div class="relative pl-4 border-l-2 border-slate-200">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-start">
                                <h3 class="font-bold text-slate-800">HMIK (Computer Science Student Association)</h3>
                                <span class="text-xs font-semibold bg-slate-100 text-slate-800 px-2 py-1 rounded-full whitespace-nowrap mt-1 sm:mt-0">Jan 2024 - Now</span>
                            </div>
                            <p class="text-sm font-medium text-slate-600 italic">Member of the Academy UP division</p>
                            <p class="text-sm text-slate-600 mt-2">
                                A division that focuses on developing the abilities of computer science students.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- PROJECTS CARD -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h2 class="text-xl font-bold text-slate-800 border-b-2 border-blue-500 pb-2 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        Projects
                    </h2>

                    <div class="space-y-8">
                        
                        <!-- Project 1 -->
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="font-bold text-slate-900">Desa Energi Berdikari (DEB) 2025</h3>
                                <span class="text-xs text-slate-500 shrink-0">Dec 2024 – Now</span>
                            </div>
                            <p class="text-sm text-blue-600 font-medium mb-1">Pertamina Foundation</p>
                            <ul class="list-disc list-outside ml-4 text-sm text-slate-700 space-y-1">
                                <li>Collaborated with Pertamina Foundation, BRIN, and Biofuturindo to provide renewable energy for residents of Kotabaru, Bekasi.</li>
                                <li>Installed a 2 kWP solar panel system and a biogas reactor converting tempe industry waste into clean energy.</li>
                            </ul>
                        </div>

                        <!-- Project 2 -->
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="font-bold text-slate-900">Desa Energi Berdikari (DEB) 2024</h3>
                                <span class="text-xs text-slate-500 shrink-0">Oct 2023 – Jan 2024</span>
                            </div>
                            <p class="text-sm text-blue-600 font-medium mb-1">Pertamina Foundation & BRIN</p>
                            <ul class="list-disc list-outside ml-4 text-sm text-slate-700 space-y-1">
                                <li>Collaborated to create new renewable energy innovations.</li>
                                <li>Succeeded in making a biogas reactor called <strong>BIOSAKA-1</strong> to solve river pollution issues due to factory waste in Bojongkulur Village, Bogor.</li>
                            </ul>
                        </div>

                        <!-- Project 3 -->
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="font-bold text-slate-900">GEMES (Gerakan Mengurangi Emisi di Desa)</h3>
                                <span class="text-xs text-slate-500 shrink-0">Jan 2024</span>
                            </div>
                            <p class="text-sm text-blue-600 font-medium mb-1">Aksi Sobat Bumi</p>
                            <ul class="list-disc list-outside ml-4 text-sm text-slate-700 space-y-1">
                                <li>Successfully planted 750 trees in Bojongkulur village in collaboration with KP2C.</li>
                                <li>Socialized clean energy transition and Net Zero Emissions to students of SDN 02 Bojongkulur.</li>
                            </ul>
                        </div>

                        <!-- Project 4 -->
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="font-bold text-slate-900">Restorasi Lahan Mangrove Jilid 1</h3>
                                <span class="text-xs text-slate-500 shrink-0">August 2024</span>
                            </div>
                            <p class="text-sm text-blue-600 font-medium mb-1">Pertamina Hulu Rokan (PHR)</p>
                            <ul class="list-disc list-outside ml-4 text-sm text-slate-700 space-y-1">
                                <li>Conducted mangrove planting at Bandar Bakau Dumai and restoration in Kampung Penempul Dumai in collaboration with Rimba Satwa Foundation.</li>
                            </ul>
                        </div>

                        <!-- Project 5 -->
                        <div>
                            <div class="flex justify-between items-start">
                                <h3 class="font-bold text-slate-900">Computer and IT Event UP (CITEUP) 2024</h3>
                                <span class="text-xs text-slate-500 shrink-0">September 2024</span>
                            </div>
                            <p class="text-sm text-blue-600 font-medium mb-1">Competition Staff Division</p>
                            <ul class="list-disc list-outside ml-4 text-sm text-slate-700 space-y-1">
                                <li>Developed a competitive programming competition, designing the mechanism, questions, and assessments.</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="text-center text-slate-400 text-xs py-6">
            &copy; 2025 Raihan Putra Akbar - CV Online
        </div>
    </div>

</body>
</html>