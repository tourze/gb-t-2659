# GB/T 2659 模块工作流程（Mermaid）

```mermaid
flowchart TD
    A[调用 Alpha2Code 枚举] --> B{传入国家/地区代码}
    B -->|有效代码| C[返回对应枚举实例]
    B -->|无效代码| D[抛出异常或返回 null]
    C --> E[获取国家名称 getLabel()]
    C --> F[获取小写代码 toLowerCase()]
    C --> G[转换为数组 toArray() 或表单选项 toSelectItem()]
    E --> H[用于显示、数据处理等场景]
    F --> H
    G --> H
```

> 本流程图描述了 GB/T 2659 模块的主要调用与数据流转逻辑，适用于绝大多数集成和使用场景。
