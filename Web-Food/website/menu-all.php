<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สำรับอาหาร</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/page3.css">
  <link rel="stylesheet" href="../css/responsive3.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Niramit:wght@500&family=Taviraj&display=swap" rel="stylesheet">
</head>

<body class="body-main">
<?php include '../include/navbar.php' ?>
  <div class="content">
    <div class="content_village">
      <h1>สำรับอาหาร </h1>
    </div>
  </div>
  <div class="main-village">
    <div class="control_village">
      <div class="image-village">
        <img
          src="https://images.unsplash.com/photo-1699463701578-9970c5bec195?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNHx8fGVufDB8fHx8fA%3D%3D"
          alt=""
          onclick="mainopenPopup()" class="flex1"
          >
          <div id="mainopenPopup" class="popup">
            <span class="close-button" onclick="mainclosePopup()">&times;</span>
            <img
              src="https://media.istockphoto.com/id/1403973419/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%97%E0%B9%87%E0%B8%AD%E0%B8%9B%E0%B9%82%E0%B8%95%E0%B9%8A%E0%B8%B0%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%B2%E0%B8%A2%E0%B8%AD%E0%B8%A2%E0%B8%B9%E0%B9%88%E0%B8%9A%E0%B8%99%E0%B9%82%E0%B8%95%E0%B9%8A%E0%B8%B0.webp?b=1&s=170667a&w=0&k=20&c=zONFHhkl3kSNsLJ1ZjmKyT91ybz8LOu1p7-auTa2FDg="
              alt="Image" />
          </div>
        <div class="flex_village">
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1682686580391-615b1f28e5ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup()" class="flex1">
            <div id="image-popup" class="popup">
              <span class="close-button" onclick="closePopup()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1682686580391-615b1f28e5ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1695418624968-d027093abdb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup1()" class="flex1">
            <div id="image-popup1" class="popup">
              <span class="close-button" onclick="closePopup1()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1695418624968-d027093abdb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1695751240056-c9aea1e799df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup2()" class="flex1">
            <div id="image-popup2" class="popup">
              <span class="close-button" onclick="closePopup2()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1695751240056-c9aea1e799df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1682685797660-3d847763208e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup3()" class="flex1">
            <div id="image-popup3" class="popup">
              <span class="close-button" onclick="closePopup3()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1682685797660-3d847763208e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
        </div>
      </div>
      <div class="village-story">
        <div class="text-village">
          <div class="text_vill">
            <h1 class="text-left mt-1 text_h1">สำรับอาหารชุดที่ 1</h1>
            <h1 class="text_h1 text-left mt-3">มีตำรับอาหารดังนี้</h1>
            <p class="text_v">  
              <a href="../website/village.php">1. ข้าวเหนียวนึ่ง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">2. ต้มส้มปลาน้ำโขง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">3. ส้ากุ้ง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">4. หมกปลี<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">5. ปิ้งปลาน้ำโขง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">6. แจ่วเห็ดไค<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">7. ผลไม้<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-village">
    <div class="control_village">
      <div class="image-village">
        <img
          src="https://images.unsplash.com/photo-1699463701578-9970c5bec195?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNHx8fGVufDB8fHx8fA%3D%3D"
          alt=""
          onclick="mainopenPopup()" class="flex1"
          >
          <div id="mainopenPopup" class="popup">
            <span class="close-button" onclick="mainclosePopup()">&times;</span>
            <img
              src="https://media.istockphoto.com/id/1403973419/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/%E0%B8%97%E0%B9%87%E0%B8%AD%E0%B8%9B%E0%B9%82%E0%B8%95%E0%B9%8A%E0%B8%B0%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%AD%E0%B8%B2%E0%B8%AB%E0%B8%B2%E0%B8%A3%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%B2%E0%B8%A2%E0%B8%AD%E0%B8%A2%E0%B8%B9%E0%B9%88%E0%B8%9A%E0%B8%99%E0%B9%82%E0%B8%95%E0%B9%8A%E0%B8%B0.webp?b=1&s=170667a&w=0&k=20&c=zONFHhkl3kSNsLJ1ZjmKyT91ybz8LOu1p7-auTa2FDg="
              alt="Image" />
          </div>
        <div class="flex_village">
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1682686580391-615b1f28e5ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup()" class="flex1">
            <div id="image-popup" class="popup">
              <span class="close-button" onclick="closePopup()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1682686580391-615b1f28e5ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1695418624968-d027093abdb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup1()" class="flex1">
            <div id="image-popup1" class="popup">
              <span class="close-button" onclick="closePopup1()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1695418624968-d027093abdb9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1695751240056-c9aea1e799df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup2()" class="flex1">
            <div id="image-popup2" class="popup">
              <span class="close-button" onclick="closePopup2()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1695751240056-c9aea1e799df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
          <div class="Vill-flex">
            <img
              src="https://images.unsplash.com/photo-1682685797660-3d847763208e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
              alt="" onclick="openPopup3()" class="flex1">
            <div id="image-popup3" class="popup">
              <span class="close-button" onclick="closePopup3()">&times;</span>
              <img
                src="https://images.unsplash.com/photo-1682685797660-3d847763208e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyMXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                alt="Image" />
            </div>
          </div>
        </div>
      </div>
      <div class="village-story">
        <div class="text-village">
          <div class="text_vill">
            <h1 class="text-left mt-1 text_h1">สำรับอาหารชุดที่ 2</h1>
            <h1 class="text_h1 text-left mt-3">มีตำรับอาหารดังนี้</h1>
            <p class="text_v">  
            <a href="../website/village.php">1. ข้าวเหนียวนึ่ง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">2. ต้มส้มปลาน้ำโขง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">3. ส้ากุ้ง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">4. หมกปลี<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">5. ปิ้งปลาน้ำโขง<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">6. แจ่วเห็ดไค<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
              <a href="../website/village.php">7. ผลไม้<i class="ml-1 fa-solid fa-caret-left"></i></a><br>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../include/footer.php' ?>
  <script src="../js/page3.js"></script>
</body>

</html>