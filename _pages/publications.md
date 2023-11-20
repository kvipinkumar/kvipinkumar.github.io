---
layout: archive
title: "Publications"
permalink: /publications/
author_profile: true
---

{% if author.googlescholar %}
  You can also find my articles on <u><a href="{{author.googlescholar}}">my Google Scholar profile</a>.</u>
{% endif %}

{% include base_path %}

## Ph.D. Dissertation

{% assign dissertations = site.publications | where: "categories", "Dissertation" | sort: "date" | reverse %}
{% assign dissertation_entry_number = dissertations.size %}

{% for post in dissertations %}
  {% assign post.dissertation_entry_number = dissertation_entry_number %}
  {% include archive-single.html %}
  {% assign dissertation_entry_number = dissertation_entry_number | minus: 1 %}
{% endfor %}

## Research Books Authored

{% assign research_books = site.publications | where: "categories", "ResearchBook" | sort: "date" | reverse %}
{% assign research_book_entry_number = research_books.size %}

{% for post in research_books %}
  {% assign post.research_book_entry_number = research_book_entry_number %}
  {% include archive-single.html %}
  {% assign research_book_entry_number = research_book_entry_number | minus: 1 %}
{% endfor %}

## Book Chapters Authored

{% assign book_chapters = site.publications | where: "categories", "BookChapter" | sort: "label" | reverse %}
{% assign book_chapter_entry_number = book_chapters.size %}

{% for post in book_chapters %}
  {% assign post.book_chapter_entry_number = book_chapter_entry_number %}
  {% include archive-single.html %}
  {% assign book_chapter_entry_number = book_chapter_entry_number | minus: 1 %}
{% endfor %}

## Peer-Reviewed Journal Publications

{% assign journal_papers = site.publications | where: "categories", "JournalPaper" | sort: "date" | reverse %}
{% assign journal_paper_entry_number = journal_papers.size %}

{% for post in journal_papers %}
  {% assign post.journal_paper_entry_number = journal_paper_entry_number %}
  {% include archive-single.html %}
  {% assign journal_paper_entry_number = journal_paper_entry_number | minus: 1 %}
{% endfor %}

## Peer-Reviewed Conference Publications (approx. 20-30% acceptance rate)

{% assign conference_papers = site.publications | where: "categories", "ConferencePaper" | sort: "date" | reverse %}
{% assign conference_paper_entry_number = conference_papers.size %}

{% for post in conference_papers %}
  {% assign post.conference_paper_entry_number = conference_paper_entry_number %}
  {% include archive-single.html %}
  {% assign conference_paper_entry_number = conference_paper_entry_number | minus: 1 %}
{% endfor %}

## U.S. Patents

{% assign us_patents = site.publications | where: "categories", "UsPatent" | sort: "date" | reverse %}
{% assign us_patent_entry_number = us_patents.size %}

{% for post in us_patents %}
  {% assign post.us_patent_entry_number = us_patent_entry_number %}
  {% include archive-single.html %}
  {% assign us_patent_entry_number = us_patent_entry_number | minus: 1 %}
{% endfor %}

## Research Posters

{% assign research_posters = site.publications | where: "categories", "ResearchPoster" | sort: "date" | reverse %}
{% assign research_poster_entry_number = research_posters.size %}

{% for post in research_posters %}
  {% assign post.research_poster_entry_number = research_poster_entry_number %}
  {% include archive-single.html %}
  {% assign research_poster_entry_number = research_poster_entry_number | minus: 1 %}
{% endfor %}

## Ph.D. Forum

{% assign phd_forum = site.publications | where: "categories", "PhdForum" | sort: "date" | reverse %}
{% assign phd_forum_entry_number = phd_forum.size %}

{% for post in phd_forum %}
  {% assign post.phd_forum_entry_number = phd_forum_entry_number %}
  {% include archive-single.html %}
  {% assign phd_forum_entry_number = phd_forum_entry_number | minus: 1 %}
{% endfor %}

## Press Coverage

{% assign press_coverage = site.publications | where: "categories", "PressCoverage" | sort: "label" | reverse %}
{% assign press_coverage_entry_number = press_coverage.size %}

{% for post in press_coverage %}
  {% assign post.press_coverage_entry_number = press_coverage_entry_number %}
  {% include archive-single.html %}
  {% assign press_coverage_entry_number = press_coverage_entry_number | minus: 1 %}
{% endfor %}