<!DOCTYPE html>
<html>
<head>
  <title>عرض المقالة</title>
  <style>
    .article-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    .article-image {
        width: auto; /* حجم ثابت للعرض */
      height: 400px; /* حجم ثابت للارتفاع */
      object-fit: cover;
    }
    .article-title {
      /* font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px; */
    }
    .article-content {
      font-size: 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <div class="article-container">
    <img src="/{{ $blogedu->cover }}" alt="صورة المقالة" class="article-image">
    <h1 class="article-title"{{ $blogedu->title }} </h1>
    <p class="article-content">{{ $blogedu->body }}</p>
</body>
</html>
