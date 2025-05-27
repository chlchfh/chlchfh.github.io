<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>최초로 소개 페이지</title>
  <style>
    body {
      font-family: 'Noto Sans KR', sans-serif;
      background-color: #ffffff;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .container {
      display: flex;
      max-width: 1400px;
      width: 100%;
      justify-content: center;
      align-items: flex-start;
      margin-top: 4rem;
    }
    .sidebar {
      width: 240px;
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 2rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-right: 3rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    .sidebar .header {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 1.5rem;
    }
    .main-content {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
    }
    .info {
      margin-top: 1rem;
      font-size: 1rem;
      line-height: 1.6;
    }
    .info a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #333;
      text-decoration: none;
      border: 1px solid transparent;
      border-radius: 50%;
      transition: all 0.3s ease;
      width: 45px;
      height: 45px;
      background: none;
    }
    .info a:hover {
      border-color: transparent;
      background: none;
    }
    .info a img {
      width: 24px;
      height: 24px;
      display: block;
      transition: transform 0.2s;
    }
    .info a:hover img {
      transform: scale(1.2);
    }
    .grid-container {
      display: grid;
      grid-template-columns: repeat(3, 280px);
      grid-template-rows: repeat(2, 280px);
      gap: 2rem;
    }
    .card {
      background-color: #7e83b9;
      border-radius: 1rem;
      color: #fff7e6;
      font-size: 1.5rem;
      font-weight: bold;
      display: flex;
      align-items: flex-end;
      justify-content: flex-start;
      padding: 1rem;
      position: relative;
      transition: transform 0.2s;
      overflow: hidden;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
      transform: scale(1.05);
    }
    .card-text {
      z-index: 1;
      transition: opacity 0.2s;
      font-size: 2.2rem;
    }
    .card:hover .card-text {
      opacity: 0;
    }
    .card::after {
      content: attr(data-hover);
      position: absolute;
      bottom: 1rem;
      left: 1rem;
      font-size: 0.95rem;
      color: #ffffff;
      opacity: 0;
      transition: opacity 0.2s;
      z-index: 1;
    }
    .card:hover::after {
      opacity: 1;
    }
    .plus-button {
      position: absolute;
      top: 0.5rem;
      right: 0.5rem;
      font-size: 1.5rem;
      background: none;
      border: none;
      color: #fff7e6;
      cursor: pointer;
      z-index: 2;
    }
    .plus-button:focus {
      outline: none;
    }
    .card.special {
      background-color: #656c96;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <div class="header">최 초 로</div>
      <img src="choro.png" alt="프로필 사진" class="profile-pic">
      <div class="info">
        <p><strong>건국대학교 교육대학원</strong><br>정보컴퓨터교육전공</p>
        <p>관심분야:<br>디지털 교육, 인공지능, 창의융합</p>
        <a href="mailto:fhchchl@naver.com" class="contact-btn" aria-label="메일 보내기">
          <img src="mail-icon.png" alt="메일 아이콘">
        </a>
        <a href="https://instagram.com/hfhclhc" target="_blank" class="contact-btn" aria-label="인스타그램">
          <img src="insta-icon.png" alt="인스타그램">
        </a>
      </div>
    </div>
    <div class="main-content">
      <div class="grid-container">
        <div class="card" data-hover="주요 활동과 이력 소개">
          <div class="card-text">경력</div>
          <button class="plus-button" onclick="location.href='career.html'">+</button>
        </div>
        <div class="card special" data-hover="코딩, 디자인, 기획 등">
          <div class="card-text">기술<br>역량</div>
          <button class="plus-button" onclick="location.href='skills.html'">+</button>
        </div>
        <div class="card" data-hover="대학원에서의 주요 연구와 프로젝트">
          <div class="card-text">대학원</div>
          <button class="plus-button" onclick="location.href='gradschool.html'">+</button>
        </div>
        <div class="card special" data-hover="정보 수업, 수업자료, 프로젝트 등">
          <div class="card-text">수업</div>
          <button class="plus-button" onclick="location.href='teaching.html'">+</button>
        </div>
        <div class="card" data-hover="초로에게 방명록을 남겨보세요!">
          <div class="card-text">초로에게</div>
          <button class="plus-button" onclick="location.href='guestbook.html'">+</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
