---
layout: archive
title: "My Research Interests"
permalink: /research/
author_profile: true
---

![My Research Interests](/images/wordcloud-2.png){: .align-center style="max-height: 100%;"}

{% if author.googlescholar %}
  You can also find my articles on <u><a href="{{author.googlescholar}}">my Google Scholar profile</a>.</u>
{% endif %}

{% include base_path %}

{% assign research_areas = site.research | sort: "order" | reverse %}
{% for post in research_areas %}
  {% include archive-single.html %}
{% endfor %}