<?php 
include '../php/conn.php';
include '../php/user_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="icon" href="../src/img/tupvlogo.png">
    <title>Upload Syllabus | TUPV Syllabus System</title>
</head>
<body>
<?php 
$page = 'uploadsyllabus';
include "../php/user_header.php";
?>
<main class="sm:ml-[64px] sm:ml-6 p-4 lg:p-6 mt-[60px]">
    <div class="flex flex-col md:flex-row md:divide-x">
        <div class="p-0 md:pr-4 lg:pr-6 md:w-2/3  h-full">
            <form id="addUserForm" method="post" action="../php/user_insert.php" enctype="multipart/form-data" class="border rounded-lg p-4 lg:p-6">
                <?php 
                include "../php/success.user_insert.php";
                ?>
                <div class="text-2xl mb-6 font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Upload File to Syllabus
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
                </div>
                <div class="grid gap-2 md:gap-4 grid-cols-4 content-end">
                    <div class="col-span-2">
                        <label for="file_year-user" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                        <select id="file_year-user" name="file_year-user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected disabled hidden value="">Choose Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="file_term-user" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Term</label>
                        <select id="file_term-user" name="file_term-user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected disabled hidden value="">Choose Term</option>
                            <option value="Prelim">Prelim</option>
                            <option value="Midterm">Midterm</option>
                            <option value="Endterm">Endterm</option>
                        </select>
                    </div>
                    <div class="col-span-4 sm:col-span-3">
                        <?php
                            $sql = "SELECT * FROM subject_tbl";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $subjects = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <label for="file_subject-user" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                        <select id="file_subject-user" name="file_subject-user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option selected disabled hidden value="">Choose the Subject</option>
                            <?php foreach ($subjects as $row): ?>
                                <option value="<?php echo $row['subjectName']; ?>"><?php echo $row['subjectName']; ?></option>
                            <?php endforeach; ?>
                        </select>   
                    </div>
                    <div class="col-span-4 sm:col-span-1">
                        <label for="file_subjCode-user" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Subject Code</label>
                        <input type="text" id="file_subjCode-user" name="file_subjCode-user" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div class="flex items-center justify-center mt-4 col-span-4">
                        <label for="fileupload_user" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PDF, WORD or XLSX (MAX. 10MB)</p>
                            </div>
                            <input id="fileupload_user" name="fileupload_user" type="file" class="hidden"/>
                        </label>
                    </div> 
                    <div class="col-span-4">
                        <input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['ID']?>" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                </div>
                <div class="flex items-center justify-end p-2 border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" value="Submit" name="insertfile" class="text-white bg-main hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800">Upload File</button>
                </div>
            </form>
        </div>
        <aside class="py-6 pl-4 lg:pl-6 md:w-1/3">
            <div class="h-full">
                <div class="mb-4">
                    <h1 class="text-xl font-semibold">Pending</h1>
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Wait for the admin to accept these files and be displayed at the Syllabus.</p>
                </div>
                <div>
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 border-y ">
                        <li class="py-3 sm:py-4 px-4 hover:bg-gray-100">
                            <a href="../files/syllabusfiles/RESUME.pdf" target="_blank">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0 ">
                                        <svg class="w-6 h-6 text-gray-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-600 truncate dark:text-white">
                                            DOCUMENT_DOCUMENT_WEEK1&2.pdf
                                        </p>
                                        <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                            Filipino 1 (Kontekstwalisadong Komunikasyon sa Filipino)
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-400 dark:text-white">
                                        <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-3 sm:py-4 px-4 hover:bg-gray-100">
                            <a href="../files/syllabusfiles/RESUME.pdf" target="_blank">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0 ">
                                        <svg class="w-6 h-6 text-gray-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-600 truncate dark:text-white">
                                            DOCUMENT_DOCUMENT_WEEK1&2.pdf
                                        </p>
                                        <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                            Filipino 1 (Kontekstwalisadong Komunikasyon sa Filipino)
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-400 dark:text-white">
                                        <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-3 sm:py-4 px-4 hover:bg-gray-100">
                            <a href="../files/syllabusfiles/RESUME.pdf" target="_blank">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0 ">
                                        <svg class="w-6 h-6 text-gray-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-600 truncate dark:text-white">
                                            DOCUMENT_DOCUMENT_WEEK1&2.pdf
                                        </p>
                                        <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                            Filipino 1 (Kontekstwalisadong Komunikasyon sa Filipino)
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-400 dark:text-white">
                                        <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="py-3 sm:py-4 px-4 hover:bg-gray-100">
                            <a href="../files/syllabusfiles/RESUME.pdf" target="_blank">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0 ">
                                        <svg class="w-6 h-6 text-gray-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-600 truncate dark:text-white">
                                            DOCUMENT_DOCUMENT_WEEK1&2.pdf
                                        </p>
                                        <p class="text-xs text-gray-500 truncate dark:text-gray-400">
                                            Filipino 1 (Kontekstwalisadong Komunikasyon sa Filipino)
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-400 dark:text-white">
                                        <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</main>
<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script>
$(document).ready( function () {
    $('#file_subject-user').change(function () {
        const selectedSubject = $(this).val();
        const subjectCodeDropdown = $('#file_subjCode-user');

        // subjectCodeDropdown.html('<option selected disabled hidden value="">Loading...</option>');

        // Convert the PHP subject data to a JavaScript object
        const subjectCodeData = <?php echo json_encode($subjects); ?>;

        const selectedSubjectCode = subjectCodeData.find(subject => subject.subjectName === selectedSubject);

        if (selectedSubjectCode) {
            subjectCodeDropdown.val(selectedSubjectCode.subjCode);
        } else {
            subjectCodeDropdown.val('No subject code found');
        }
    });
});
</script>
</body>
</html>