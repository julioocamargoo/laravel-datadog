## About

Getting started with laravel + Datadog on AWS ECS environment

## How to run

- Create your ECS cluster
- Follow [Datadog tutorial, https://docs.datadoghq.com/tracing/setup/php/] to create a task/service for datadog agent
- Use startup.sh as entrypoint on your application task definition
- Be fun exploring your dashboards :)

## To Do

- Get datadog-tracer-php version dinamically 
- Check if application is running on AWS environment before set DD_AGENT_HOST
- Include terraform/cloudformation script creating ECS
