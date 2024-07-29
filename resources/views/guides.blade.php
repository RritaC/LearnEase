<x-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Download Your AI Guide: Unlock the Power in Your Classroom!</title>
        <style>
            body {
                font-family: sans-serif;
                margin: 0;
                padding: 20px;
            }

            .banner {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 30px;
            }

            h1 {
                font-size: 2.5rem;
                margin: 0;
            }


            .hero p {
                font-size: 1.2rem;
                line-height: 1.5;
                margin-bottom: 20px;
            }

            .download-btn {
                background-color: #106851;
                color: white;
                padding: 15px 30px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1.1rem;
            }

            .exclusive-btn{
                background-color: #106851;
                color: white;
                padding: 15px 30px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1.1rem;
            }


            .exclusive-btn:hover{
                background-color: #50131c;
                transition-duration: 400ms;
            }

            .download-btn:hover {
                background-color: #178F4C;
                transition-duration: 400ms;
            }

            .grid li {
                list-style: none;
            }



        </style>
    </head>
    <body>
    <header class="banner">
        <h1 class="font-bold text-4xl text-center pt-4 pb-6">Download From Many of Our Guides</h1>
    </header>
    <main>
        <div class="grid grid-cols-2 gap-5">
            <p class="self-start rounded-md bg-dark/30 px-3 py-2 text-sm font-semibold text-dark shadow-sm hover:bg-dark hover:text-white focus-visible:outline
          focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition duration-500"
               style="max-width: fit-content;">Make learning fun and engaging with the power of AI! <br>
                Download our free guides packed with tips and tricks to integrate AI into <br>
                your classroom and empower your students.
            </p>
            <p class="rounded-md bg-dark/30 px-3 py-2 text-sm font-semibold text-dark shadow-sm hover:bg-dark hover:text-white focus-visible:outline
            focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition duration-500"
               style="max-width: fit-content;">
                Do you ever feel stuck and nothing is helping, well you are not alone. Whenever you want
                you can download our free guides to which more than 200,000 other students who felt like you have done. Relax and download whatever feels like can help!
            </p>
        </div>
        <br>
        <br>

        <section class="grid grid-cols-4 gap-4">
            <button class="download-btn" id="download-btn-ai-classroom">A Guide to Using AI in Your Classroom!</button>

            <button class="download-btn" id="download-btn-ai-personalized">A Guide to AI in Personalized Learning!</button>

            <button class="download-btn" id="download-btn-ai-management">A Guide to AI for Classroom Management!</button>

            <button class="download-btn" id="download-btn-ai-engagement">A Guide to AI for Enhancing Student Engagement!</button>

            <button class="download-btn" id="download-btn-study-master">A Guide to Mastering Studying!</button>
            {{--Above Fuctional--}}
            <button class=" exclusive-btn" id="download-btn-ai-personalized-sat">SAT: Month Long Preparing (Exclusive)</button>

            <button class=" exclusive-btn" id="download-btn-ai-management-exams">The Ins and Outs of Exams! (Exclusive)</button>

            <button class=" exclusive-btn" id="download-btn-ai-engagement-teacher">What does your teacher think! (Exclusive)</button>

            <button class=" exclusive-btn" id="download-btn-ai-classroom-present">Present like a master, to everyone! (Exclusive)</button>

            <button class=" exclusive-btn" id="download-btn-ai-personalized-all">Everything about AI! (Exclusive)</button>

            <button class=" exclusive-btn" id="download-btn-ai-management-machine">Machine Learning 101 (Exclusive)</button>

            <button class=" exclusive-btn" id="download-btn-ai-engagement-listening">The Art of Listening (Exclusive)</button>
        </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
    <script>
        const downloadBtn = document.getElementById('download-btn');

        function downloadPDF(pdfUrl) {
            window.open(pdfUrl, '_blank');
        }

        const downloadButtons = document.querySelectorAll('.download-btn');

        downloadButtons.forEach(button => {
            button.addEventListener('click', () => {
                console.log('here')
                const buttonId = button.id;
                let pdfUrl;

                switch (buttonId) {
                    case 'download-btn-ai-classroom':
                        pdfUrl = "/A%20Guide%20to%20Using%20AI%20in%20Your%20Classroom.pdf";
                        break;
                    case 'download-btn-ai-personalized':
                        pdfUrl = "/AI%20in%20Personalized%20Learning.pdf";
                        break;
                    case 'download-btn-ai-management':
                        pdfUrl = "/AI%20for%20Classroom%20Management.pdf";
                        break;
                    case 'download-btn-ai-engagement':
                        pdfUrl = "/AI%20for%20Enhancing%20Student%20Engagement.pdf";
                        break;
                    case 'download-btn-study-master':
                        pdfUrl = "/A%20Guide%20to%20Mastering%20Studying.pdf";
                        break;
                        //-------------Above Are Functional


                }

                if (pdfUrl) {
                    downloadPDF(pdfUrl);
                }
            });
        });

        const exclusiveButtons = document.querySelectorAll('.exclusive-btn');

        exclusiveButtons.forEach(button => {
            button.addEventListener('click', () => {
                alert(
                    "This content is exclusive for members who have extra access. Please check your membership status to access this content."
                );
            });
        });

        const closePopup = document.getElementById('closePopup');

        closePopup.addEventListener('click', () => {
            const popup = document.getElementById('popup');
            popup.style.display = 'none';
        });
    </script>
    </body>
    </html>

</x-layout>
