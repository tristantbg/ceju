<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  t1:
    label: Intro
    type: headline
  title:
    label: Title
    type:  text
  text:
    label: Intro
    type:  textarea
  qui1:
    label: Text A
    type:  textarea
    width: 1/2
  qui2:
    label: Text B
    type:  structure
    style: table
    width: 1/2
    fields:
      text:
        label: Text
        type: text
  qui3:
    label: Text C
    type:  textarea
  imagea:
    label: Image A
    type: image
    width: 1/2
  imageb:
    label: Image B
    type: image
    width: 1/2
  s2:
    label: Section 2 left
    type: headline
  s2title:
    label: Title
    type: text
  s2texta:
    label: Text A
    type: textarea
  s2textb:
    label: Text B
    type: textarea
  s2image:
    label: Image A
    type: image
    width: 1/2
  s3:
    label: Section 3 right
    type: headline
  s3title:
    label: Title
    type: text
  s3texta:
    label: Text A
    type: textarea
  s3textb:
    label: Text B
    type: textarea
  s3image:
    label: Image A
    type: image
    width: 1/2
  s4:
    label: Section 4 center
    type: headline
  s4title:
    label: Title
    type: text
  s4texta:
    label: Text A
    type: textarea
  s4textb:
    label: Text B
    type: textarea
  s4image:
    label: Image A
    type: image
    width: 1/2
  s5:
    label: Section 2 left
    type: headline
  s5title:
    label: Title
    type: text
  s5texta:
    label: Text A
    type: textarea
  s5textb:
    label: Text B
    type: textarea
  s5image:
    label: Image A
    type: image
    width: 1/2
  s6:
    label: Section 3 right
    type: headline
  s6title:
    label: Title
    type: text
  s6texta:
    label: Text A
    type: textarea
  s6textb:
    label: Text B
    type: textarea
  s6image:
    label: Image A
    type: image
    width: 1/2
  s7:
    label: Consultation
    type: headline
  ctitle:
    label: Title
    type: text
  ctexta:
    label: Text A
    type: textarea
  ctextb:
    label: Text B
    type: textarea
  contact:
    label: Contact
    type:  structure
    style: table
    fields:
      text:
        label: Name
        type: text
      value:
        label: Value
        type: textarea
  s8:
    label: Tarifs
    type: headline
  ttitle:
    label: Title
    type: text
  tarifs:
    label: Tarifs
    type:  structure
    style: table
    fields:
      text:
        label: Text
        type: text
      price:
        label: Price
        type: text