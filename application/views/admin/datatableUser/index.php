<style type="text/css">
    td:first-child,
td:nth-child(3),
td:nth-child(4),
td:nth-child(6),
td:nth-child(7),
td:nth-child(10) {
    text-align: center;
}
</style>

<section>
    <h1 class="display-4 my-4 text-info">Danh Sách Ứng Viên Đăng Ký</h1>
    <table class="table table-striped" id="users" style="width: 2100px;">
        <thead>
            <tr id="list-header" style="text-align: center">
                <th>ID</th>  
                <th>TÊN</th>
                <th>NTNS</th>
                <th>SĐT</th>
                <th>EMAIL</th>
                <th>BẰNG CẤP</th>
                <th>NGOẠI NGỮ</th>
                <th>CÔNG VIỆC MONG MUỐN</th>
                <th>ĐỊA CHỈ</th>
                <th>MỨC LƯƠNG MONG MUỐN</th>
                <th>NỘI DUNG</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</section>

<script type="text/javascript">
 var table;
function initTableData() {
  var data = [
    {
      id: 2,
      name: "Huỳnh Thị Thảo Vi",
      birthday: "1990",
      sdt: 0903572281,
      email: "abc@example.com",
      address: "Bình Dương",
      diploma: "THPT",
      language: "N3",
      work: "Công việc liên quan tiếng Nhật",
      wage: "10tr net",
      addressWork: "Bình Dương các tỉnh gần",
      cv: "https://drive.google.com/drive/u/1/folders/13NBsN3BxoQmlnLCJT1OejsGUG3pHuR8h?ths=true",
      content:
        "26/6: Đang đi dạy học ở Tân Bình và gò vấp-29/1: Gửi mail UV.14/9: Drive lỗi, mất CV",
    },
    {
      id: 2,
      name: "Huỳnh Thị Thảo Vi",
      birthday: "1990",
      email: "abc@example.com",
      address: "Bình Dương",
      diploma: "THPT",
      language: "N3",
      work: "Công việc liên quan tiếng Nhật",
      wage: "10tr net",
      addressWork: "Bình Dương các tỉnh gần",
      cv: "https://drive.google.com/drive/u/1/folders/13NBsN3BxoQmlnLCJT1OejsGUG3pHuR8h?ths=true",
      content:
        "26/6: Đang đi dạy học ở Tân Bình và gò vấp-29/1: Gửi mail UV.14/9: Drive lỗi, mất CV",
    },
    {
      id: 2,
      name: "Huỳnh Thị Thảo Vi",
      birthday: "1990",
      email: "abc@example.com",
      address: "Bình Dương",
      diploma: "THPT",
      language: "N3",
      work: "Công việc liên quan tiếng Nhật",
      wage: "10tr net",
      addressWork: "Bình Dương các tỉnh gần",
      cv: "https://drive.google.com/drive/u/1/folders/13NBsN3BxoQmlnLCJT1OejsGUG3pHuR8h?ths=true",
      content:
        "26/6: Đang đi dạy học ở Tân Bình và gò vấp-29/1: Gửi mail UV.14/9: Drive lỗi, mất CV",
    },
    {
      id: 2,
      name: "Huỳnh Thị Thảo Vi",
      birthday: "1990",
      email: "abc@example.com",
      address: "Bình Dương",
      diploma: "THPT",
      language: "N4",
      work: "Công việc liên quan tiếng Nhật",
      wage: "10tr net",
      addressWork: "Bình Dương các tỉnh gần",
      cv: "https://drive.google.com/drive/u/1/folders/13NBsN3BxoQmlnLCJT1OejsGUG3pHuR8h?ths=true",
      content:
        "26/6: Đang đi dạy học ở Tân Bình và gò vấp-29/1: Gửi mail UV.14/9: Drive lỗi, mất CV",
    },
    {
      id: 2,
      name: "Huỳnh Thị Thảo Vi",
      birthday: "1990",
      email: "abc@example.com",
      address: "Bình Dương",
      diploma: "THPT",
      language: "N3",
      work: "Công việc liên quan tiếng Nhật",
      wage: "10tr net",
      addressWork: "Bình Dương các tỉnh gần",
      cv: "https://drive.google.com/drive/u/1/folders/13NBsN3BxoQmlnLCJT1OejsGUG3pHuR8h?ths=true",
      content:
        "26/6: Đang đi dạy học ở Tân Bình và gò vấp-29/1: Gửi mail UV.14/9: Drive lỗi, mất CV",
    },
  ];
  table = $("#users").DataTable({
    processing: true,
    data,
    columns: [
      { data: "id" },
      { data: "name" },
      { data: "birthday" },
      { data: "sdt" },
      { data: "email" },
      { data: "diploma" },
      { data: "language" },
      { data: "work" },
      { data: "address" },
      { data: "wage" },
      { data: "content" },
    ],
  });
}

$(document).ready(function () {
  initTableData();
  $("#list-header").on({
    mouseenter: function () {
      $(this).css("background-color", "lightgray");
    },
    mouseleave: function () {
      $(this).css("background-color", "lightblue");
    },
  });
});

</script>