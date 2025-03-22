import React, { useState } from 'react';
import { toast } from 'react-toastify';
import * as yup from 'yup';

const PostForm = () => {

  const [title, setTitle] = useState('');
  const [content, setContent] = useState('');

  const handleSubmit = async (e) => {
    e.preventDefault();

    const postData = {
      title: title,
      content: content
    };

    const schema = yup.object().shape({
      title: yup.string().required("Title is required"),
      content: yup.string().required("Content is required")
    });

  try {
    await schema.validate(postData, { abortEarly: false });

    const response = await fetch('https://server.tld/post', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(postData)
    });

    if (!response.ok) {
      toast.error('Failed to post data');
    }

    toast.success('Data posted successfully!');
  } catch (error) {
    if (error.inner) {
      error.inner.forEach(e => {
        toast.error(e.message);
      });
    } else {
      toast.error('There was an error posting the data!');
    }
  }

  };

  return (
    <form onSubmit={handleSubmit}>
      <div>
        <label htmlFor="name">Title:</label>
        <input
          type="text"
          id="title"
          value={title}
          onChange={(e) => setTitle(e.target.value)}
        />
      </div>
      <div>
        <label htmlFor="email">Content:</label>
        <input
          type="text"
          id="content"
          value={title}
          onChange={(e) => setContent(e.target.value)}
        />
      </div>
      <button type="submit">Submit</button>
      </form>
     );
    };

export default PostForm;