---
title: 'Inclusion files and arguments passing'
date: '05-07-2014 00:00'
taxonomy:
    tag:
        - jekyll
        - documentation
summary: 'Inclusion files and arguments passing'
product: articles
depth: 1
---

This is the 3rd part of a series of articles about [Jekyll], a blog aware static website creation tool. During the [first part](../welcome-jekyll) I've presented the quick startup to create a minimal autogenerated website using Jekyll while in the [second part](../pages-and-posts) the differences between pages and posts were shown.

Where multiple pages or posts require the same part of code, even if little differences can happen between their usage, a great solution is to put the common code inside an inclusion file.

Every file saved into the **\_include** folder could be included inside any other page or post using:

    {% include filename %}

The whole code will be copied inside the page as if it was written inside the page. Obviously the included file can have other includes or other liquid tags.

If you look at the content of the file **\_layouts/page.html** you can see:

    ---
    layout: default
    ---
    <div class="post">
    
      <header class="post-header">
        <h1>{{ page.title }}</h1>
      </header>
    
      <article class="post-content">
        {{ content }}
      </article>
    
    </div>

The default file **\_layouts/post.html** instead contains:

    ---
    layout: default
    ---
    <div class="post">
    
      <header class="post-header">
        <h1>{{ page.title }}</h1>
        <p class="meta">{{ page.date | date: "%b %-d, %Y" }}
          {% if page.author %} • {{ page.author }}{% endif %}
          {% if page.meta %} • {{ page.meta }}{% endif %}</p>
      </header>
    
      <article class="post-content">
        {{ content }}
      </article>
    
    </div>

The two files are really similar, except a single line their whole content is the same. These two files are optimal candidates to use the inclusion tag with the advantage to have a single copy of the code and to avoid redundancies, while doing the code maintenance simpler and uniform whenever any change to the code
would happen. If you have a single copy of a code, a change or fix will automatically be applied to any pages that use the same included file.

To handle the different line between the two files we could use a simple check to exclude such line from the rendered page by simply passing an argument to the included file, so let's create a new file called **\_include/post_content.html**:

    <div class="post">
    
      <header class="post-header">
        <h1>{{ page.title }}</h1>
    {% if include.meta_paragraph %}
        <p class="meta">{{ page.date | date: "%b %-d, %Y" }}
          {% if page.author %} • {{ page.author }}{% endif %}
          {% if page.meta %} • {{ page.meta }}{% endif %}</p>
    {% endif %}
      </header>
    
      <article class="post-content">
        {{ content }}
      </article>
    
    </div>

The **include.meta_paragraph** is a value that will be passed to the included file. If the passed value will be true then the paragraph will be added to the page else it will not be written at all.

So to change the **\_layouts/page.html** file content to:

    ---
    layout: default
    ---
    {% include post_content.html meta_paragraph=false %}

The **meta_paragraph** will become **include.meta_paragraph** inside the included file and it will be checked to produce or omit the paragraph.

The **\_layouts/post.html** will contain:

    ---
    layout: default
    ---
    {% include post_content.html meta_paragraph=true %}

Et voilà, both files now are similar and a single copy of the code is needed to handle both layout pages.

[Jekyll]: http://jekyllrb.com/