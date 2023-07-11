<!-- latest news -->
<div class="latest-news pt-150 pb-150">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3><span class="orange-text">Our</span> News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="blog-list"  class="col-lg-4 col-md-6">
                
                    
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="news.html" class="boxed-btn">More News</a>
            </div>
        </div>
    </div>
</div>
<!-- end latest news -->


<script>
    blogList();
    async function blogList(){
        try{
            let URL = "/blog_details";
            let response = await axios.get(URL)

            response.data.forEach((item) => {
                document.getElementById('blog-list').innerHTML+=(
                    ` <div class="single-latest-news">
                        <a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
                    <div class="news-text-box">
                        <h3><a href="single-news.html">${item['title']}}</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i>${item['name']}</span>
                            <span class="date"><i class="fas fa-calendar"></i>${item['date']}</span>
                        </p>
                        <p class="excerpt">${item['description']}</p>
                        <p class="excerpt">${item['image']}</p>
                        <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div> `
                );
            });
        }
        catch{
            alert(error);
        }
    }

</script>