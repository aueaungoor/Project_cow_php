<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f6f6f6;
        }

        .table {
            width: 70%;
            background-color: #ffffff;
            margin-left: 15%;
            margin-top: 1%;
        }

        /* .addBtn {
            margin-left: 25%;
            
        } */
        .row{
            margin-left: 15%;
            justify-content: space-between;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #ffffff;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 250px;
            padding: 1px 16px;
            height: 1000px;
            /* margin-top: 5%; */
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>

</head>
<body>
<div class="row  mb-3">
        <div class="col">
            <a href="?controller=shed&action=form_addshed" class="addBtn btn btn-primary">Add Shed</a>
          </div>
    </div>

<table class="table table-bordered">
            <thead class="table-light">
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>UPDATE</th>
                <th>Delete</th>
            </thead>
            <tbody>
            <tbody id="table-body">
            <?php foreach($shed_list as $shed)
            {
            echo "<tr><td>$shed->id</td>
            <td>$shed->name</td>
            <td>$shed->status</td>
            <td><a href=?controller=shed&action=form_editshed&id=$shed->id>Edit</a></td>
             <td><a href=?controller=shed&action=form_deleteshed&id=$shed->id>Delete</a></td>
            </tr>";
            }
            ?>
            </tbody>
    </table>
     <!-- Pagination -->
     <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center" id="pagination">
        <li class="page-item" id="prev-page">
          <a class="page-link" href="#" onclick="prevPage()">Previous</a>
        </li>
        <!-- ปุ่มตัวเลขจะถูกสร้างโดย JavaScript -->
        <li class="page-item" id="next-page">
          <a class="page-link" href="#" onclick="nextPage()">Next</a>
        </li>
      </ul>
    </nav>
  </div>

    <script>
    const rowsPerPage = 15; // จำนวนแถวต่อหน้า
    const rows = Array.from(document.querySelectorAll('#table-body tr')); // ดึงแถวทั้งหมดในตาราง
    const totalPages = Math.ceil(rows.length / rowsPerPage); // คำนวณจำนวนหน้าทั้งหมด
    let currentPage = 1; // หน้าปัจจุบัน เริ่มต้นที่หน้าแรก

    // ฟังก์ชันสำหรับแสดงข้อมูลในหน้าที่เลือก
    function changePage(pageNumber) {
      currentPage = pageNumber;

      // ซ่อนทุกแถวก่อน
      rows.forEach(row => row.style.display = 'none');

      // คำนวณแถวที่จะต้องแสดง
      const start = (currentPage - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      rows.slice(start, end).forEach(row => row.style.display = 'table-row');

      // อัปเดตสถานะปุ่ม Previous และ Next
      document.getElementById('prev-page').classList.toggle('disabled', currentPage === 1);
      document.getElementById('next-page').classList.toggle('disabled', currentPage === totalPages);

      // อัปเดตปุ่มตัวเลข Pagination
      updatePagination();
    }

    // ฟังก์ชันสำหรับสร้างปุ่มตัวเลข Pagination
    function updatePagination() {
      const pagination = document.getElementById('pagination');
      
      // ลบปุ่มตัวเลขเก่า
      const oldPageNumbers = pagination.querySelectorAll('.page-number');
      oldPageNumbers.forEach(button => button.remove());

      // เพิ่มปุ่มตัวเลขใหม่
      for (let i = 1; i <= totalPages; i++) {
        const pageItem = document.createElement('li');
        pageItem.classList.add('page-item', 'page-number');
        if (i === currentPage) pageItem.classList.add('active');
        
        const pageLink = document.createElement('a');
        pageLink.classList.add('page-link');
        pageLink.href = '#';
        pageLink.textContent = i;
        pageLink.onclick = () => changePage(i);
        
        pageItem.appendChild(pageLink);
        pagination.insertBefore(pageItem, document.getElementById('next-page'));
      }
    }

    // ฟังก์ชันสำหรับปุ่ม Previous
    function prevPage() {
      if (currentPage > 1) {
        changePage(currentPage - 1);
      }
    }

    // ฟังก์ชันสำหรับปุ่ม Next
    function nextPage() {
      if (currentPage < totalPages) {
        changePage(currentPage + 1);
      }
    }

    // เรียกใช้ changePage(1) เพื่อแสดงข้อมูลหน้าแรกตอนโหลดหน้าเว็บ
    changePage(1);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>