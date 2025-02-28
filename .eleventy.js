import { EleventyHtmlBasePlugin } from "@11ty/eleventy";

import ejsPlugin from "@11ty/eleventy-plugin-ejs";

export default async function (eleventyConfig) {
  eleventyConfig.addPlugin(EleventyHtmlBasePlugin);
  eleventyConfig.addPlugin(ejsPlugin);
  eleventyConfig.addPassthroughCopy("./src/assets/**/*");
  eleventyConfig.addPassthroughCopy("./src/media");
  eleventyConfig.addPassthroughCopy("./src/google06b7d7a15066b364.html");
  eleventyConfig.addPassthroughCopy("./src/CNAME");

  return {
    dir: {
      input: "src",
      output: "public",
    },
  };
}
