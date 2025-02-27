import ejsPlugin from "@11ty/eleventy-plugin-ejs";

export default async function (eleventyConfig) {
  eleventyConfig.addPlugin(ejsPlugin);
  eleventyConfig.addPassthroughCopy("./src/assets/img");
  eleventyConfig.addPassthroughCopy("./src/assets/app.css");
  eleventyConfig.addPassthroughCopy("./src/google06b7d7a15066b364.html");

  return {
    dir: {
      input: "src",
      output: "public",
    },
  };
}
